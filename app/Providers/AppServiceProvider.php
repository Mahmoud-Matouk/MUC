<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Offer;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use App\Observers\OfferObserver;
use Illuminate\Pagination\Paginator;
use Laravel\Pulse\Facades\Pulse;
use Spatie\Health\Facades\Health;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Spatie\Health\Checks\Checks\PingCheck;
use Filament\Support\Facades\FilamentColor;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\DatabaseSizeCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\RedisMemoryUsageCheck;
use Spatie\Health\Checks\Checks\DatabaseTableSizeCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        Paginator::useTailwind();

        Schema::defaultStringLength(length: 191);

        if (! Filament::isServing()) {
            FilamentColor::register([
                'primary' => Color::Neutral,
                'gray' => Color::Slate,
            ]);
        }

        Pulse::users(function ($ids) {
            return User::findMany($ids)->map(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'extra' => $user->email,
                'avatar' => $user->avatar,
            ]);
        });

        Health::checks([
            // PingCheck::new()->url(config('app.url'))->name('Index'),
            QueueCheck::new(),
            RedisMemoryUsageCheck::new(),
            ScheduleCheck::new(),
            UsedDiskSpaceCheck::new(),
            DatabaseConnectionCountCheck::new(),
            DatabaseSizeCheck::new(),
            DatabaseTableSizeCheck::new(),
        ]);

        Table::configureUsing(function (Table $table): void {
            $table
                ->striped()
                ->poll('20s')
                ->persistFiltersInSession();
        });

        Offer::observe(OfferObserver::class);
    }
}
