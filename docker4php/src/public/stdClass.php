<?php

 //PHP stdClass
 
 $str = '{"a":1,"b":2,"c":3}';

 $arr = json_decode($str);

 var_dump($arr);

 echo "<pre>";
 print_r($arr);
 echo "</pre>";
