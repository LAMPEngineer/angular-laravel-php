<?php
 
 namespace App;

 class ToasterPro extends Toaster
 {
    protected int $size;

     public function __construct(int $y){
         
        parent::__construct('foo');

         $this->size = 4;
         
     }

     public function addSlice(string $slice): void
     {
         parent::addSlice($slice);
     }
 
     public function toastBagel()
     {
         foreach ($this->slices as $i => $slice) {
             echo ($i + 1) . ': Toasting '. $slice . ' with bagel option' . PHP_EOL;
         }        
     }     

     
 }