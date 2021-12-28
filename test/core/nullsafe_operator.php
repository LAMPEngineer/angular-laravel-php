<?php 

/* NULLSAFE OPERATOR (?->) */

/* To call a method or fetch a property on the result of 
 * an expression if it is not null. 
 * 
 */


/* PHP 7: 
$country = null;
if($session !== null){
	$user = $session->user;

	if($user !== null){
		$address = $user->getAdress();

		if($adress !== null){
			$country = $adress->country;
		}
	}
}
*/

/* PHP 8: Instead of null check conditions, we can now 
 * use a chain of calls with the new nullsafe operator. 
 * When the evaluation of one element in the chain fails, 
 * the execution of entire chain aborts and the entire 
 * chain evaluates to null 
 */ 

// $country = $session?->user?->getAdress()?->country;


class User {
    public function profile()
    {
        return new Profile; 
    }
}

class Profile{
    public function employment()
    {
        return 'web developer';
    }
}

$user = new User;
echo '<br/>Nullsafe, Employment: ', $user?->profile()?->employment(); // web developer, if profile is null, the entire chain evaluate to null without crash



/*  Only for reading data:
 * We cann't use nullsafe operator to write data to objects 
 *
 */
//$user?->profile()?->employment() = 'PHP Developer'; // crash



/* Null coalescing vs. NullSafe operator */

# 1. We can use null coaleascing operator in combination with array keys, while nullsafe operator can't handle them

$array = [];
var_dump($array['key']->foo ?? null);


//var_dump($array['key']?->foo); //Warning: Undefined array key "key" 



# 2. NullSafe operator work with method calls, while null coalescing can't
class Invoice{

	public function getDate():?DateTime {

		return null;
	}

}

$invoice = new Invoice();

 /* we could use nullsafe operator to call 'format' on the invoice's date, even when it's null */
var_dump($invoice->getDate()?->format('Y-m-d')); //null


/* Null coalescing operator would crash */
//var_dump($invoice->getDate()->format('Y-m-d') ?? null); // Fatal error: Uncaught Error: Call to a member function format() on null 