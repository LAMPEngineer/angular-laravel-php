<?php

namespace App;

class Invoice
{
    private float $amount;

    public function __get(string $name)
    {
        var_dump($name);
    }

    public function __set(string $name, $value)
    {
        var_dump($name, $value);
    }

}