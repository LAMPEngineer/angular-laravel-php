<?php
 declare(strict_types=1);

 class Transaction
 {
    private ?Customer $customer = null;
    
    /* Constructor property promotion, PHP8.0 */
 	public function __construct(
        private float $amount = 0.0, 
        private ?string $description = null) // nullable type
    {}

    /*
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
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