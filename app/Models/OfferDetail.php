<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OfferDetail extends Model
{
    public function offers(): BelongsTo
    {
        return $this->BelongsTo(Offer::class);
    }

}
