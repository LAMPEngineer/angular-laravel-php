<?php

declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

class Transaction
{
        
    public function __construct(
        private float $amount
    ){}

    // getter
    public function getAmount(): float {
         return $this->amount;
    }

    public function process()
    {
        echo 'Processing $' . $this->amount . ' transaction';
    }

}