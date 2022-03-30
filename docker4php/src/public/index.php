<?php

 spl_autoload_register(function($class){

     $path = __DIR__ . '/../' . lcfirst( str_replace('\\', '/', $class)) . '.php';

     require $path;
 });



 use \App\PaymentGateway\Paddle\Transaction;

 $paddleTransaction = new Transaction();

 var_dump($paddleTransaction);