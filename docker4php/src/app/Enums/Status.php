<?php
namespace App\Enums;

class Status
{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';
  
  
    /* Lookup table */
    public const ALL_STATUS = [
      self::PAID => 'Paid',
      self::PENDING => 'Pending',
      self::DECLINED => 'Declined'
    ];
}