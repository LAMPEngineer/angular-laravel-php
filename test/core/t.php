<?php
    include("index.php");


$users = [['id' => 1, 'name'=> 'Alex'],['id' => 2, 'name' => 'Billy']];

$ids = array_map(function ($user){
	return $user['id'];

}, $users);


echo '<pre>';
print_r($users);
print_r($ids);
echo '</pre>';