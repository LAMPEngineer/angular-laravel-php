<?php

namespace App\Interfaces;

interface DebtCollector 
{
    public function collect(float $owedAmount): float;

}