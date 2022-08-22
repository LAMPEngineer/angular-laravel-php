<?php
 
 namespace App\CoffeeMakerMachines;

 class CoffeeMaker
 {
    public function makeCoffee()
    {
        echo static::class . ' is making coffee'. PHP_EOL;
    }
 }