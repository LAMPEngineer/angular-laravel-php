<?php

namespace App;

class Invoice
{
    /* user method */
    protected static function process($description)
    {
        var_dump($description);
    }

    /* magic method __call 
     * triggered when invoking inaccessible methods in an object context.
     */
    public function __call(string $name, array $arguments)
    {
        if(method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
        }
    }

    /* magic method __callStatis 
     *  triggered when invoking inaccessible methods in a static context.
     */
    public static function __callStatic(string $name, array $arguments)
    { 
        return self::$name($arguments);

    }

}