<?php

 namespace App;

 abstract class Field
 {
     public function __construct(
         protected string $name
     ){}

     abstract protected function render(): string;

 }