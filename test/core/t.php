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

$greet = function ($nm) {
			return 'Hey ' . $nm;
		};


var_dump($greet($name));