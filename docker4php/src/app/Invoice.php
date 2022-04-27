<?php

namespace App;

class Invoice
{
    private float $amount;
    private int $id = 1234;
    private string $accountNumber = 'abc12345678';

    public function __debugInfo(): ?array
    {
       return [
           'id' => $this->id,
           'accountNumber' => '****' . substr($this->accountNumber, -4)
       ];
    }

}