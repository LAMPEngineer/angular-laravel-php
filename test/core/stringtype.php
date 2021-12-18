<?php 


    
/* STRINGS */

$firstname = 'Will';
$lastname  = 'Smith';

$name = $firstname. ' ' . $lastname;

$name[15] = 'I';

echo $name . '<br/>';

var_dump($name);


$x = 1;
$y = 2;
# Heredoc 
$heredoc = <<<TEXT
Line $x
Line $y
Line 3
TEXT;



# Nowdoc 
$nowdoc = <<<'TEXT'
Line $x
Line $y
Line 3
TEXT;

echo '<br />',nl2br($heredoc);
echo '<br /><br />',nl2br($nowdoc);