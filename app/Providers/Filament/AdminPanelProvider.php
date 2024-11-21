<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Filament\PanelProvider;
use App\Filament\Pages\Backups;
use Filament\Navigation\MenuItem;
use App\Filament\Pages\Auth\Login;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Blade;
use App\Http\Middleware\SetAuthLocale;
use App\Http\Middleware\VerifyActiveUser;
use App\Filament\Pages\Auth\CustomProfile;
use App\Filament\Pages\HealthCheckResults;
use Filament\Http\Middleware\Authenticate;
use Filament\Support\Facades\FilamentView;
use Pboivin\FilamentPeek\FilamentPeekPlugin;
use Filament\SpatieLaravelTranslatablePlugin;
use Filament\FontProviders\GoogleFontProvider;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use pxlrbt\FilamentEnvironmentIndicator\EnvironmentIndicatorPlugin;
use ShuvroRoy\FilamentSpatieLaravelBackup\FilamentSpatieLaravelBackupPlugin;
use ShuvroRoy\FilamentSpatieLaravelHealth\FilamentSpatieLaravelHealthPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->spa()
            ->id('admin')
            ->path('admin')
            ->login(Login::class)
            ->profile(CustomProfile::class)
            // ->databaseNotifications()
            ->collapsibleNavigationGroups()
            ->userMenuItems([
                'profile' => MenuItem::make()
                    ->label(auth()->user()?->name)
                    ->icon('iconoir-user')
                    ->url('/admin/profile'),
            ])
            ->colors([
                'primary' => Color::Indigo,
                'gray' => Color::Slate,
            ])
            ->font(
                'Noto Sans Arabic',
                'https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@100..900&display=swap',
                GoogleFontProvider::class
            )
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->brandLogo(asset('/assets/img/logo.png'))

            ->pages([
                \App\Filament\Pages\Admin\Dashboard::class,
            ])

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // SessionsOverview::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                SetAuthLocale::class,
            ])
            ->authMiddleware([
                Authenticate::class,
                VerifyActiveUser::class,
            ], isPersistent: true)
            ->plugin(
                FilamentPeekPlugin::make()
            )
            ->plugin(
                SpatieLaravelTranslatablePlugin::make()
                    ->defaultLocales(config('app.locales'))
            )
            ->plugin(
                FilamentFullCalendarPlugin::make()
            )
            ->plugin(
                EnvironmentIndicatorPlugin::make()
                    ->showBorder(false)
                    ->visible(fn () => auth()->user()?->isSuper())
            )
            ->plugin(
                FilamentSpatieLaravelBackupPlugin::make()
                    ->usingPage(Backups::class)
            )
            ->plugin(
                FilamentSpatieLaravelHealthPlugin::make()
                    ->usingPage(HealthCheckResults::class)
            );
    }

    public function register(): void
    {
        parent::register();

        FilamentView::registerRenderHook(
            'panels::body.end',
            fn () => Blade::render('<x-impersonate::banner/>')
        );
    }
}
