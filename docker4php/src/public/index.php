<?php
use \App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';


$paddleTransaction = new Transaction();

//echo $paddleTransaction::STATUS_PAID;