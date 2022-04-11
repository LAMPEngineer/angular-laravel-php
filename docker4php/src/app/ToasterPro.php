<?php
 
 namespace App;

 class ToasterPro extends Toaster
 {
     protected int $size = 4;

 
     public function toastBagel()
     {
         foreach ($this->slices as $i => $slice) {
             echo ($i + 1) . ': Toasting '. $slice . ' with bagel option' . PHP_EOL;
         }        
     }     

     
 }