<?php


require __DIR__ . '/../vendor/autoload.php';

// $classA = new App\ClassA();
// $classB = new App\ClassB();

// echo $classA->getName() . PHP_EOL;
// echo $classB->getName() . PHP_EOL;


// echo App\ClassA::getname(). PHP_EOL;
// echo App\ClassB::getname(). PHP_EOL;

var_dump(App\ClassA::make());
var_dump(App\ClassB::make());

