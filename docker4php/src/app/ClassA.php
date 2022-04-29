<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    public function getname(): string
    {
        return static::$name;
    }
}