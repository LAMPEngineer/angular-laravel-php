<?php
include("error.php");

echo "<center>Test Core</center><br/>";

function prettyPrintArray(array $value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}