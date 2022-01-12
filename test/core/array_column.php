<?php
   require_once 'index.php';

 # array_column()
 
/*
 * array_column(array $array, 
 *              int|string|null $column_key, 
 *              int|string|null $index_key = null
 *              ): array 
 *              
 *   - returns the values from a single column of array, identified by 
 *     column_key. Optionally, index_key is to index the values in the 
 *     returned array
 *
 * 
 *   $array:
 *    - a. If an array of objects is provided, then public properties can
 *     be directly pulled
 *
 *    - b. In order for protected or private properties to be pulled, the
 *     class must implement both __get() and __isset() magic methods.       
 * 
 */
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe'
    ),
    array(
        'id' => 2245,
        'first_name' => 'Sally',
        'last_name' => 'Smith'
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones'
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe'
    ),
);

/* case 1: Get column of first_name from a record */
$first_names = array_column($records, 'first_name');
echo '---- array_column ----<br />';
prettyPrintArray($first_names);


/* case 2: Get column of last names from a record set, indexed 
 * by 'id' column 
 */
echo '---- array_column index by id ----<br />';
prettyPrintArray(array_column($records, 'last_name', 'id'));


/*
 * case 3: Get colume of usernames from public 'username' property of an object
 */
class User
{
	public $username;
	public $lastname;
	public $id;

	public function __construct(string $username, string $lastname, int $id )
	{
		$this->username = $username;
		$this->lastname = $lastname;
		$this->id = $id;
	}
}

$users = [
	new User('user 1', 'l_name 1', 123),
	new User('user 2', 'l_name 2', 458),
	new User('user 3', 'l_name 3', 649)
];
prettyPrintArray($users);
echo '---- usernames from public "username" property  ----<br />';
 prettyPrintArray(array_column($users, 'username', 'id'));



/*
 * case 4: Get column name of names from private "name" property of 
 * an object using magic __get() method
 * 
 */

