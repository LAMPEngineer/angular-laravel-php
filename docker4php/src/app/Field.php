<?php


namespace App;

use App\Interfaces\Randerable;

 abstract class Field implements Randerable
 {
     public function __construct(
         protected string $name
     ){}

     abstract public function render(): string;

 }