<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory, HasUlids, SoftDeletes, HasTranslations;

    protected array $translatable = ['name', 'experience', 'position'];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
