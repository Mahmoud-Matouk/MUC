<?php

namespace App\Models;

use App\Enums\PaymentProcessor;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasUlids;

    protected function casts(): array
    {
        return [
            'processor' => PaymentProcessor::class,
            'metadata' => 'array',
            'verified_at' => 'datetime',
        ];
    }

    public function verifier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verifier_id');
    }

    public function getCompanyLogo(): ?string
    {
        return match ($this->company) {
            default => null,
            'mada' => url('/app/payments/mada.png'),
            'visa' => url('/app/payments/visa.jpg'),
            'mastercard' => url('/app/payments/mastercard.png'),
            'applepay' => url('/app/payments/applepay.jpg'),
            'stcpay' => url('/app/payments/stcpay.png'),
            'sadad' => url('/app/payments/sadad.jpg'),
        };
    }
}
