<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Filament\Resources\PostResource\Pages\ListPosts;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget\Stat;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;

class PostStatsWidget extends BaseWidget
{
    use interactsWithPageTable;

    protected static ?string $pollingInterval = '1s';

    protected function getColumns(): int
    {
        return 2;
    }

    protected function getTablePage(): string
    {
        return ListPosts::class;
    }

    protected function getStats(): array
    {
        $query = $this->getPageTableQuery();

        $postData = Post::getPostChartData($query);
        $postsCount = number_format($query->count(), 0, '', ',');
        $clicksData = Post::getClicksChartData();

        return [
            // Stat::make('Posts', $postsCount)
            //     ->description(Post::getDescriptionInformation(fn () => $postData)['description'])
            //     ->descriptionIcon(Post::getDescriptionInformation(fn () => $postData)['icon'])
            //     ->chart($postData)
            //     ->color(Post::getDescriptionInformation(fn () => $postData)['color']),

            // Stat::make('Views', $query->sum('clicks'))
            //     ->description(Post::getDescriptionInformation(fn () => $clicksData)['description'])
            //     ->descriptionIcon(Post::getDescriptionInformation(fn () => $clicksData)['icon'])
            //     ->chart($clicksData)
            //     ->color(Post::getDescriptionInformation(fn () => $clicksData)['color']),

            Stat::make('Total Posts', $postsCount)
                ->icon('iconoir-post')
                ->iconPosition('start')
                ->description('The posts in this period')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('primary')
                ->iconColor('success'),

            // Stat::make('Total Comments', '23.4k')
            //     ->icon('iconoir-chat-bubble')
            //     ->iconPosition('start')
            //     ->description('The comments in this period')
            //     ->descriptionIcon('heroicon-o-chevron-down', 'before')
            //     ->descriptionColor('danger')
            //     ->iconColor('danger'),
        ];
    }
}
