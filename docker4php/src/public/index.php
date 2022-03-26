<?php
 require_once '../PaymentGateway/Stripe/Transaction.php';
 require_once '../PaymentGateway/Paddle/Transaction.php';

 use PaymentGateway\Stripe\Transaction;

 var_dump(new Transaction());
