<?php
 
 namespace App;

/* Composition: 
 *
 * 1. Relationship between classes that allows one class to contain another
 * 2. Has-A relationship
 * 3. More loosely coupled & more flexible over inheritance
 * 
 */
 class FancyOven 
 {
    // dependency injection to use composition
   public function __construct(private ToasterPro $toaster)
   {}

    public function fry()
    {
        // fry stuff
    }
     
    public function toast()
    {
        $this->toaster->toast();
    }

    public function toastBagel()
    {
        $this->toaster->toastBagel();
    }

 }