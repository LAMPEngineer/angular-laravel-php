<?php
 require_once '../PaymentGateway/Stripe/Transaction.php';
 require_once '../PaymentGateway/Paddle/CustomerProfile.php';
 require_once '../PaymentGateway/Paddle/Transaction.php';
 require_once '../Notification/Email.php';



 use PaymentGateway\Paddle as PA;
 use PaymentGateway\Stripe\Transaction as StripeTransaction;


 $paddleTransaction = new PA\Transaction();
 $stripeTransaction = new StripeTransaction();
 $paddleCustomerProfile = new PA\CustomerProfile();


 var_dump($paddleCustomerProfile, $paddleTransaction, $stripeTransaction);