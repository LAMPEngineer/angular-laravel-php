<?php

 /*JSON decode returns stdClass object*/
 
 $str = '{"a":1,"b":2,"c":3}';

 $arr = json_decode($str);

 echo 'JSON decode returns stdClass object: <br /><br />';
 var_dump($arr->c);//access std class property

 echo "<pre>";
 print_r($arr);
 echo "</pre>";


/*PHP stdClass*/

$obj = new \stdClass();

$obj->p = 15;
$obj->q = 16;

 echo '<br />PHP stdClass: <br />';
 var_dump($obj);

 echo "<pre>";
 print_r($obj);
 echo "</pre>";


/*Cast to an Object*/

$arr = [4, 5, 6];
$obj = (object) $arr;
echo '<br />Cast to an Object: <br />';
var_dump($obj);

 echo "<pre>";
 print_r($obj);
 echo "</pre>";

echo 'access stdClass property: <br />';
var_dump($obj->{2});//access stdClass property



/*Cast other type to an Object*/

echo '<br /><br />Cast integer to object:<br />';
$cast = (object) 25;
var_dump($cast);

 echo "<pre>";
 print_r($cast);
 echo "</pre>";


echo 'Access property:<br />';
var_dump($cast->scalar);




/*Null value cast to an Object*/

echo '<br /><br />Null value cast to an Object:<br />';
$cast = (object) null;// empty 
var_dump($cast);