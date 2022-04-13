<?php

namespace App\Interfaces;

interface DebtCollector extends AnotherInterface, SomeOtherInterface
{
    public function __construct();
    public function collect(float $owedAmount): float;

}