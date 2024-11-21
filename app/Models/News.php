<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    public function getTable(): string
    {
        return 'news';
    }

    protected array $translatable = [
        'title',
        'content',
        'description',
    ];
}
