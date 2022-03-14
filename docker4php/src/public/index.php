<?php
 declare(strict_types=1);

 require_once '../Transaction.php';


 // Classes & Objects
 $transaction = (new Transaction(100, 'Transaction 1'))
                ->addTax(8)
                ->applyDiscount(10);


 var_dump($transaction->getAmount());
