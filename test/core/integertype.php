<?php 

    include("index.php");
    
/* INTEGERS */

$x = 0b110;


# decimal      = 5
# hexa decimal = 0x2A
# octal        = 055
# binary       = 0b110
# integer max value = PHP_INT_MAX

echo $x, '<br/>';


$y = PHP_INT_MAX + 1;
var_dump($y);