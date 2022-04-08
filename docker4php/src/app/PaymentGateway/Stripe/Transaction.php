<?php

declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

class Transaction
{
        
    public function __construct(
        public float $amount
    ){}



    public function process()
    {
        echo 'Processing $' . $this->amount . ' transaction';
    }

}