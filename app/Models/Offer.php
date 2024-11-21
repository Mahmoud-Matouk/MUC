<?php

namespace App\Models;

use App\Enums\OfferStatus;
use App\Models\OfferDetail;
use App\Observers\OfferObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schedule;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    public $translatable = ['name', 'description'];

    public $casts = [
        'status' => OfferStatus::class,
        'start_date' => 'datetime',
        'expiry_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function details(): HasMany
    {
        return $this->HasMany(OfferDetail::class);
    }

    public function setAsActive(bool $isActive = true): void
    {
        $this->update(['active' => $isActive]);
    }

    // public static function setOfferStatusBeforeCreate(array $data) {
    //     $data['status'] = $data['expiry_date'] > now() ? OfferStatus::Valid : OfferStatus::Expired;
    //     $data->save(['status']);
    //     dd($data);
    //     Offer::where('id', $data['id'])->set([
    //         'status' => $data['expiry_date'] > now() ? OfferStatus::Valid : OfferStatus::Expired
    //     ]);
    // }
};
