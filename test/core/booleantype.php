<?php 

    include("index.php");
    
/* Boolean Data Types */

$isComplete = (string)true;

# integers 0, -0 are false
# floats 0.0, -0.0 are false
# string '' is false
# string '0' is false
# array [] is false
# null is false

var_dump(is_bool($isComplete));

//echo ($isComplete)? 'success':'fail';