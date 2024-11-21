<?php

namespace App\Observers;

use App\Models\Offer;
use App\Enums\OfferStatus;

class OfferObserver
{
    public static function updateStatus(Offer $offer): void
    {
        // $offer->status = $offer->expiry_date > now() ? OfferStatus::Valid : OfferStatus::Expired;
        // $offer->save(['status']);

        Offer::where('id', $offer->id)->update([
            'status' => $offer->expiry_date > now() ? OfferStatus::Valid : OfferStatus::Expired,
        ]);
    }
}
