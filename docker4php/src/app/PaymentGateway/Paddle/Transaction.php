<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
  private const STATUS_PAID = 'paid';
  public const STATUS_PENDING = 'pending';
  public const STATUS_DECLINED = 'declined';

  
  public function __construct()
  {
      var_dump(self::STATUS_PAID);      
  }


}