<?php

namespace App;

class ClassA
{
    protected string $name = 'A';

    public function getname(): string
    {
        var_dump(get_class($this));
        return $this->name;
    }
}