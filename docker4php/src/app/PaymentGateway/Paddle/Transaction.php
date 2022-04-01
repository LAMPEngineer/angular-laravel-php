<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
  public const STATUS_PAID = 'paid';
  public const STATUS_PENDING = 'pending';
  public const STATUS_DECLINED = 'declined';


  /* Lookup table */
  public const ALL_STATUS = [
    self::STATUS_PAID => 'Paid',
    self::STATUS_PENDING => 'Pending',
    self::STATUS_DECLINED => 'Declined'
  ];

  private string $status;

  
  public function __construct()
  {
      $this->setStatus(self::STATUS_PENDING);      
  }

  public function setStatus(string $status)
  {
    if(!isset(self::ALL_STATUS[$status])){
      throw new \InvalidArgumentException('Invalid status');
    }
    $this->status = $status;

    return $this;
  }


}