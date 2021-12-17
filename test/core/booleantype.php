<?php 

    include("index.php");
    
/* Boolean Data Types */

$isComplete = null;

# integers 0, -0 are false
# floats 0.0, -0.0 are false
# string '' is false
# string '0' is false
# array [] is false
# null is false

echo ($isComplete)? 'success':'fail';