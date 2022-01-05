<?php

/* Declare Statements - 
 * It is use to set execution directives for a block of code
 */

declare(strict_types=1);

/* 1. declare - ticks directive
 *
 * The ticks directive will send a tick event each time a 
 * specified number of instructions has been executed. 
 * A tick function can be registerd which will run each time 
 * a tick event fires.
 */


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


 /* 2. declare - encoding directive
  *
  * It is use to indicate what character encoding 
  * file is using. It cannot be use on a block, 
  * it has to apply to whole file
  */



 /* 3. declare - strict_type directive
  *
  * when strict_type directive is set, values of 
  * wrong type passed into function arguments with 
  * type hints will throw a fatal error instead of 
  * being cast to correct type
  */
  
  function sum(int $a, int $b){
  	return $a + $b;
  }

  echo '<br/>sum= ' . sum(5, 1);
