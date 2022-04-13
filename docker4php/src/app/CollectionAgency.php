<?php
namespace App;

use App\Interfaces\DebtCollector;


class CollectionAgency implements DebtCollector
{
    public const MY_CONSTANT = 1;
    public function __construct()
    {

    }

    public function collect(float $owedAmount): float
    {
        return $owedAmount;
    }

}