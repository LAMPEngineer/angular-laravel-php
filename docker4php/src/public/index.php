<?php
 declare(strict_types=1);

 require_once '../Transaction.php';


 // Classes & Objects
 $transaction = new Transaction(15, 'Transaction 1');
 $transaction->addTax(8);

 var_dump($transaction->amount);
