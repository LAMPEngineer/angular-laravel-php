<?php
use \App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';


$paddleTransaction = new Transaction();

//echo $paddleTransaction::STATUS_PAID;


/* Class magic constant - 'class'
 * 
 * returns fully qualified class name
 * 
 */
echo $paddleTransaction::class;
echo '<br />';
echo Transaction::class;
