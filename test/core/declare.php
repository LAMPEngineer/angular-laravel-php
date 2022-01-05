<?php

/* Declare Statements - 
 * It is use to set execution directives for a block of code
 */


# declare - ticks directive

function onTick(){
	echo 'Tick <br/>';
}

register_tick_function('onTick');


declare(ticks=4);

$i = 0;
$length = 10;

while ($i < $length) {
	echo $i++ . '<br/>';
}


# declare - encoding directive



# declare - strict_type directive