<?php

 require __DIR__ . '/../vendor/autoload.php';

use \App\PaymentGateway\Paddle\Transaction;
use Ramsey\Uuid\UuidFactory;

$paddleTransaction = new Transaction();

$id = new UuidFactory();

echo $id->uuid4();

var_dump($paddleTransaction);
