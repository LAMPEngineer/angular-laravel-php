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
	echo "<br/>", CONSTANT, "<br/>";



/* 2. const defines constant at compile time 
 * whereas define() defines constant at runtime.
 * 
 */

	if(true){
		//const Foo = 'bar'         // not valid
		define('STATUS_SAID', 9); 
	}

	echo "<br/>",STATUS_SAID;




/* 3. define dynamic constants 
 * 
 */

 $paid = 'PAID';
 //const STATUS_.$paid = $paid;     // not valid

 define('STATUS_'.$paid, $paid);  

 echo "<br/>",STATUS_PAID;





/* 4. const be use to define class or interface 
 *     constant while we can't use define() for class 
 *     or interface constant declaration
 * 
 */

class Abc{
	const VAR = 'Class constant';
	//define('XUV', 3); // not valid

}

Interface A{
	const B = 'Interface constant';
	//define('XUV', 3); // not valid
}


echo "<br/> class const= ",Abc::VAR;
echo "<br/> interface const= ", A::B; 



/*
 * 5. Class constants can be redefine by a child class
 */

 class Pqr extends Abc{
 	const VAR = 'child class constant';
 }

 echo "<br/> constant = ", Pqr::VAR;

