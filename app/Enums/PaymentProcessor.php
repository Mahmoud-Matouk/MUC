<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PaymentProcessor: string implements HasLabel
{
    case Transfer = 'transfer';

    case Amazon = 'amazon';

    public function getLabel(): string
    {
        return match ($this) {
            self::Transfer => trans('payments.transfer'),
            self::Amazon => trans('payments.amazon'),
        };
    }
}
