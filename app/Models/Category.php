<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    protected array $translatable = ['name', 'description'];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
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
