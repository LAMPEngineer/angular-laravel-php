<?php

namespace App;

class Invoice
{
    /* user method */
    protected function process(float $amount, $description)
    {
        var_dump($amount, $description);
    }

    /* magic method __call */
    public function __call(string $name, array $arguments)
    {
        if(method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
        }
    }

    /* magic method __callStatis */
    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);

    }

}