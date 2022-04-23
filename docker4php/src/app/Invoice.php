<?php

namespace App;

class Invoice
{
    /* user method */
    protected function process()
    {
        var_dump('process');
    }

    /* magic method __call */
    public function __call(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }

    /* magic method __callStatis */
    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);

    }

}