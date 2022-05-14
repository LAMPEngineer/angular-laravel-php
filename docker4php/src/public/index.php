<?php


require __DIR__ . '/../vendor/autoload.php';

// $here = "/a/b/c/d";
// list($i1,$i2,$i3,$i4) = explode('/', $here);
// print("$i3"); echo PHP_EOL;



// class A{
//     function x(){echo "In A";}
// }
// class B{
//     function getA(){
//         return new A();
//     }
// }

// $b = new B();
// $b->getA()->x();


// for($count = 1; $count < 20; $count++);
// print $count;



// abstract class A{
//     abstract function ab();
// }

/* Q9: maximum profit */
function maximumProfit(array $inventory, int $order){
    $max_profit = 0;
    $max_heap = [];
    //rsort($inventory);

    for ($i=0; $i < count($inventory); $i++){
        array_push($max_heap, $inventory[$i]);
    } 
        
    // print_r($max_heap);
    // die;
    rsort($max_heap);

    while ($order > 0) {
        $order--;

        $x = $max_heap[0];
        $stack = array_shift($max_heap);

        $max_profit += $x;

        array_push($stack, $x--);

        rsort($stack);
    }

    return $max_profit;

}

$inventory = [4, 6];
$order = 4;
echo 'Max profit= '. maximumProfit($inventory, $order) . PHP_EOL;

