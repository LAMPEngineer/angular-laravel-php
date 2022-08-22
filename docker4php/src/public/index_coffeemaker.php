<?php

require __DIR__ . '/../vendor/autoload.php';

# Coffee Maker
$coffeeMaker = new \App\CoffeeMakerMachines\CoffeeMaker();
$coffeeMaker->makeCoffee();


# Latte Maker
$latteMaker = new \App\CoffeeMakerMachines\LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();  


# Cappuccino Maker
$cappuccinoMaker = new \App\CoffeeMakerMachines\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuchino(); 


# AllInOne Coffee Maker
$allInOneCoffeeMaker = new \App\CoffeeMakerMachines\AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuchino();





