<?php
 require_once '../PaymentGateway/Stripe/Transaction.php';
 require_once '../PaymentGateway/Paddle/CustomerProfile.php';
 require_once '../PaymentGateway/Paddle/Transaction.php';
 require_once '../Notification/Email.php';



 use PaymentGateway\Paddle\Transaction;
 use PaymentGateway\Stripe\Transaction as StripeTransaction;

 $paddleTransaction = new Transaction();
 $stripeTransaction = new StripeTransaction();

 var_dump($paddleTransaction, $stripeTransaction);