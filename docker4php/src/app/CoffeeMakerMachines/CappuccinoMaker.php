<?php
 
 namespace App\CoffeeMakerMachines;

 class CappuccinoMaker extends CoffeeMaker
 {
    use CappuchinoTrait;

    # This mathod get precedence over method defined in trait
    public function makeCappuchino()
    {
        echo static::class . ' Making Cappuccino (UPDATED)' . PHP_EOL;
    }

 }