<?php

namespace App;

class ClassA
{
    protected string $name = 'A';

    public function getname(): string
    {
        return $this->name;
    }
}