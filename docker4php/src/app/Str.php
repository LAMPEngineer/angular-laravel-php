<?php

namespace App;

use Exception;

class Str
{
    private static $methods = [
        'upper' => 'strtoupper',
        'lower' => 'strtolower',
        'len'   => 'strlen'
    ];
    
    private $functions = [
        'upper' => 'strtoupper',
        'lower' => 'strtolower',
        'len'   => 'strlen'
    ];

    public static function __callStatic(string $method, array $parameters)
    {
        if(!array_key_exists($method, self::$methods)){
            throw new Exception('The ' . $method . ' is not supproted.');
        }   

        return call_user_func_array(self::$methods[$method], $parameters);
    }
    
    
    public function __call(string $method, array $parameters)
    {
        if(!array_key_exists($method, $this->functions)){
            throw new Exception('The ' . $method . ' is not supproted.');
        }   

        return call_user_func_array($this->functions[$method], $parameters);
    }

}