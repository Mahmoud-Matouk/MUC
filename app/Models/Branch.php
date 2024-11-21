<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use BranchActions, HasFactory, HasTranslations, HasUlids, SoftDeletes;

    protected array $translatable = [
        'name', 'address',
    ];

    protected static function booted(): void
    {
        static::creating(function (self $model) {
            if (! $model->creator_id) {
                $model->creator_id = auth()->id();
            }
        });
    }

    public function scopeForPublic(Builder $builder)
    {
        $builder->where('visible', true);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
