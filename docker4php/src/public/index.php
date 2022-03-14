<?php
 declare(strict_types=1);

 require_once '../Transaction.php';

 $class = 'Transaction';

 // Classes & Objects
 $amount = (new $class(100, 'Transaction 1'))
            ->addTax(8)
            ->applyDiscount(10)
            ->getAmount();


 var_dump($amount);
