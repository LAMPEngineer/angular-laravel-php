<?php

namespace App\CoffeeMakerMachines;

trait CappuchinoTrait
{
    private function makeCappuchino()
    {
        echo static::class . ' is making cappuchino'. PHP_EOL;
    }

    # This mathod get precedence over base class method
/*     public function makeCoffee()
    {
        echo static::class . ' Making Coffeee(UPDATED)' . PHP_EOL;
    } */


/*     public function makeLatte()
    {
        echo static::class . ' is making latte (Cappuchino Trait)' . PHP_EOL;
    } */
}