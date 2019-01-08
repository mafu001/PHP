<?php


//ARRAY DATA ADD BY ARRAY_MERGE WITH SLICE
$foods = array('banana', 'apple', 'mango', 'jackfruit', 'pineapple', 'grapes');

$needFoods = array_slice($foods, 0, 3);
print_r($needFoods);

$needFoods2 = array_slice($foods, 3);
print_r($needFoods2);

$addFoods = array_merge($needFoods, $needFoods2);
print_r($addFoods);

echo "\n or, \n \n";

$totalFoods = $needFoods + $needFoods2;
print_r($totalFoods); // same offset are removed but array_merge didn't do that

echo "\n \n===========///// 1 end //////=========== \n \n";


//ARRAY DATA ADD BY ARRAY_MERGE WITH SPLICE
$rolls= array(
    'one'       =>  51,
    'two'       =>  52,
    'three'     =>  53,
    'four'      =>  54,
     5          =>  55,
    'six'       =>  56,
     7          =>  57,
);

$spliceRolls = array_splice($rolls, 3, 2, array(4 => 'new1', 'eight' => 'new2'));

print_r($spliceRolls); //but key didn't show of numeric
print_r($rolls);    //key didn't show of numeric, because array_splice has not any way to add true argument

echo "\n \n===========///// 2 end //////=========== \n \n";

//but if i do same work in slice
$rolls2 = array(
    'one'       =>  51,
    'two'       =>  52,
    'three'     =>  53,
    'four'      =>  54,
     5          =>  55,
    'six'       =>  56,
     7          =>  57,
);

$r1 = array_slice($rolls2, 0, 3, true);
$r2 = array_slice($rolls2, 5, null, true);
$r3 = array(4 => 'new1', 'eight' => 'new2');

$sliceRolls = $r1 + $r3 + $r2; // same result of up and key has been preserved
print_r($sliceRolls);




