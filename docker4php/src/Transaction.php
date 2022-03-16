<?php
 declare(strict_types=1);

 class Transaction
 {
    private float $amount; // class property

    /* Constructor property promotion, PHP8.0*/
 	public function __construct(
        float $amount, 
        private string $description){
        $this ->amount = $amount; 

    }

 	public function addTax(float $rate): Transaction 
    {
 		$this->amount += $this->amount * $rate / 100; 

        return $this;
 	}

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function __destruct()
    {
        echo 'Destruct : ' . $this->description . '<br />';
    }

 }