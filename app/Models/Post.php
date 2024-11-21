<?php

namespace App\Models;

use App\Enums\PostStatus;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory, HasSlug, HasUlids, PostActions, SoftDeletes;

    public $casts = [
        'status' => PostStatus::class,

        'tobe_published_at' => 'datetime',
        'published_at' => 'datetime',
        'hidden_at' => 'datetime',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function getPostChartData(Builder $query): array
    {
        $clonedQuery = clone $query;

        // get the query status and filter it by the date range and convert it into array
        $data = $clonedQuery->pluck('created_at')
            ->map(fn ($date) => $date->format('Y-m-d'),
            )->countBy()->toArray();

        if (isset($data)) {
            ksort($data);
        }

        return $data;
    }

    public static function getClicksChartData(): array
    {
        // $data = PostClick::select('post_id', DB::raw('count(*) as click_count'))
        //     ->groupBy('post_id')
        //     ->pluck('click_count', 'post_id')
        //     ->toArray();
        //
        // return array_values($data);
        return [];
    }

    public static function getDescriptionInformation(callable $dataFetcher): array
    {
        $data = $dataFetcher();

        // Check for empty array
        if (empty($data)) {
            return [
                'description' => 'No data available',
                'icon' => 'heroicon-o-minus',
                'color' => 'gray',
            ];
        }

        // Extract dates and counts, and sort by date
        $dates = array_keys($data);
        $counts = array_values($data);
        array_multisort($dates, SORT_ASC, $counts);

        $totalPercentageChange = 0;
        $numberOfChanges = count($counts) - 1;

        for ($i = 1; $i < count($counts); $i++) {
            $previous = $counts[$i - 1];
            $current = $counts[$i];
            $percentageChange = (($current - $previous) / ($previous != 0 ? $previous : 1)) * 100;
            $totalPercentageChange += $percentageChange;
        }

        $averagePercentageChange = $numberOfChanges > 0 ? $totalPercentageChange / $numberOfChanges : 0;

        // Determine the state based on the average percentage change
        $state = $averagePercentageChange > 0 ? 'increase' : ($averagePercentageChange < 0 ? 'decrease' : 'no_change');
        $result = abs($averagePercentageChange);

        return [
            'description' => $result == 0 ? 'No Rate of change' : (intval($result).'% '.$state),
            'icon' => match ($state) {
                'increase' => 'heroicon-o-arrow-trending-up',
                'decrease' => 'heroicon-o-arrow-trending-down',
                'no_change' => 'heroicon-o-minus',
            },
            'color' => match ($state) {
                'increase' => 'success',
                'decrease' => 'danger',
                'no_change' => 'gray',
            },
        ];
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) => $query->where(fn ($query) => $query
            ->where('title', 'like', '%'.$search.'%')
            ->orWhere('summary', 'like', '%'.$search.'%'))
            ->orWhere('content', 'like', '%'.$search.'%'));

        $query->when($filters['author'] ?? false,
            fn ($query, $author) => $query->whereHas('author', fn ($query) => $query->where('username', $author),
            ));
    }

    public function scopeForPublic(Builder $builder)
    {
        $builder->with('author')->where('status', 'published');
    }
}
