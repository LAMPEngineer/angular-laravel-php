<?php
    include("index.php");
    
/* Const vs. Define
 *
 *	Both are used to define a constant.
 *	
 *	Differences:
 */

/* 1. const is keyword whereas define() is a method*/

    const PI=3.14;
  	echo 'PI: ', PI;


	define("CONSTANT", "Hello world.");
	echo CONSTANT;



/* 2. const defines constant at compile time 
 * whereas define() defines constant at runtime.
 * 
 */

	$x = 10;

	/*if ($x == 10) {
	     const FOO = 'foo';    // Invalid
	 }*/
	 // but
	 if ($x == 10) {
	     define("BAR", 'bar'); // Valid
	 }

    echo 'BAR= '. BAR;


/* 3. const be use to define class or interface constant 
 * while we can't use define() for class or interface constant declaration
 * 
 */

