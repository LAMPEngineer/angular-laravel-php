<?php 

/*Named Arguments - PHP v8*/

/* Named arguments allow passing arguments to a function
 * based on the parameter name,rather than parameter position.
 *  
 */
declare(strict_types=1);
function foo(int $x, int $y): int{
	if($x % $y === 0){
		return $x / $y;
	}

	return $x;
}

$x = 6;
$y = 3;

echo foo(y:$y, x:$x); 

# Order of paremeters are not inportent

# Without $ sign will be the parameter name




/* Optional parameter & default values

 * if named parameter call-site does not set a 
 * value for the parameter, the default value will be 
 */

function greet(string $name, string $greeting = 'Hello'){
	echo "$greeting, $name";
}
echo '<br/>';
greet(name: 'Simon');




/*Skipping parameters 
* 
* With named parameter, the default value is inherited 
* if it is not set at call-site
*/
function greet1( string $name, string $greeting = 'Hello', bool $warm = false){

	echo "$greeting, $name";
	if($warm){
		echo " You are awesome";
	}
}

echo '<br/>';
greet1(name: "Simon", warm: true);



/*Refrence:
 * https://php.watch/versions/8.0/named-parameters
 */