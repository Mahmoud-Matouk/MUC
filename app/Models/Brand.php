<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory, HasTranslations;

    public function getTable(): string
    {
        return 'brands';
    }

    protected array $translatable = [
        'name',
        'description',
    ];
}
