<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Carbon\Carbon;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Filament\Resources\PostResource\Pages\ListPosts;

class PostChartWidget extends ChartWidget
{
    use interactsWithPageTable;

    protected static ?string $heading = 'Created Posts';

    protected int|string|array $columnSpan = 'full';

    protected static string $color = 'primary';

    protected static ?string $maxHeight = '200px';

    protected static ?string $pollingInterval = '1s';

    public ?string $filter = 'year';

    protected function getTablePage(): string
    {
        return ListPosts::class;
    }

    protected function getFilters(): ?array
    {
        return [
            'week' => 'Last Week',
            'month' => 'Last Month',
            '3months' => 'Last 3 Months',
            'year' => 'Last Year',
        ];
    }

    protected function getData(): array
    {
        $query = $this->getPageTableQuery();

        $query->getQuery()->orders = [];

        match ($this->filter) {
            'week' => $data = Trend::query($query)
                ->between(
                    start: now()->subWeek(),
                    end: now(),
                )
                ->perDay()
                ->count(),

            'month' => $data = Trend::query($query)
                ->between(
                    start: now()->subMonth(),
                    end: now(),
                )
                ->perDay()
                ->count(),

            '3months' => $data = Trend::query($query)
                ->between(
                    start: now()->subMonths(3),
                    end: now(),
                )
                ->perMonth()
                ->count(),

            'year' => $data = Trend::query($query)
                ->between(
                    start: now()->subYear(),
                    end: now(),
                )
                ->perMonth()
                ->count(),
        };

        return [
            'datasets' => [
                [
                    'label' => 'Blog posts',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'fill' => true,
                    'tension' => 0.3,
                    'borderCapStyle' => 'butt',
                    'pointBackgroundColor' => '#fff',
                    'borderColor' => 'rgb(75, 192, 192)',
                    'pointBorderColor' => 'rgb(75, 192, 192)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => Carbon::parse($value->date)->format($this->filter === 'year' ? 'M' : 'D'))];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
