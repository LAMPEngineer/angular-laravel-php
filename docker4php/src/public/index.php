<?php
 declare(strict_types=1);

 require_once '../Transaction.php';


 // Classes & Objects
 $transation = (new Transaction(100, 'Transaction 1'))
            ->addTax(8)
            ->applyDiscount(10);

 $amount = $transation->getAmount();

 $transation = null;//destructor will be call first

 var_dump($amount);
