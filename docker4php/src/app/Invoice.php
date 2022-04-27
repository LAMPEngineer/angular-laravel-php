<?php

namespace App;

class Invoice
{
    private float $amount;
    private int $id = 1234;
    private string $accountNumber = 'abc12345678';

    /*  magic method __debugInfo
     * This method is called by var_dump() when dumping an object to 
     * get the properties that should be shown. If the method isn't 
     * defined on an object, then all public, protected and private 
     * properties will be shown.
     */
    public function __debugInfo(): ?array
    {
       return [
           'id' => $this->id,
           'accountNumber' => '****' . substr($this->accountNumber, -4)
       ];
    }

}