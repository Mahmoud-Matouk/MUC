<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bundle extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected array $translatable = [
        'name',
        'description',
    ];

    public function analyses(): BelongsToMany
    {
        return $this->belongsToMany(Analysis::class);
    }

    public function setAsActive(bool $isActive = true): void
    {
        $this->update(['active' => $isActive]);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
