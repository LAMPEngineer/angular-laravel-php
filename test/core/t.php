<?php
    include("index.php");

/* use case: 1*/
$users = [['id' => 1, 'name'=> 'Alex'],['id' => 2, 'name' => 'Billy']];

$ids = array_map(function ($user){
	return $user['id'];

}, $users);


echo '<pre>';
print_r($users);
print_r($ids);
echo '</pre>';


/* use case: 2*/
$name = 'Alex';

$greet = fn () => 'Hey ' . $name;

var_dump($greet());




/* use case: 3*/

$string = 'alexander';

$split = str_split($string);

$result = array_map(fn ($char, $count) => compact('char', 'count'), array_unique($split), array_count_values($split));


echo '<pre>', var_dump($result), '</pre>';



