<?php

namespace App;

class Invoice
{
    protected array $data = [];


   /* 
    * This is utilized for reading data from inaccessible
    * (protected or private) or non-existing properties.
    *
    */
    public function __get(string $name)
    {
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }

        return null;
    }



   /* 
    * This is run when writing data to inaccessible 
    * (protected or private) or non-existing properties.
    *
    */
    public function __set(string $name, $value): void
    {
        
        $this->data[$name] = $value;
        
    }


   /* 
    * This is triggered by calling isset() or empty() on inaccessible 
    * (protected or private) or non-existing properties.
    */
    public function __isset(string $name): bool
    {
        var_dump('isset');
        return array_key_exists($name, $this->data);
    }



   /* 
    * This is invoked when unset() is used on inaccessible 
    * (protected or private) or non-existing properties.
    */
    public function __unset(string $name): void
    {
        var_dump('unset');
        unset($this->data[$name]);
    }


}