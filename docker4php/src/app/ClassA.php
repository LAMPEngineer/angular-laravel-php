<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    public static function getname(): string
    {
        return self::$name;
    }
}