<?php
 
 namespace App\CoffeeMakerMachines;

 class AllInOneCoffeeMaker extends CoffeeMaker
 {
    
    use LatteTrait;

    use CappuchinoTrait{
        # conflict resolution
        CappuchinoTrait::makeLatte insteadof LatteTrait;
    }

    

 }