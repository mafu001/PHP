<?php

//ARRAY DATA EXTRACT BY ARRAY_SLICE
$foods = array('banana', 'apple', 'mango', 'jackfruit', 'pineapple', 'grapes');

$needFoods = array_slice($foods, 2);    // 2 offset indicate to how many data put out from array
print_r($needFoods);
echo "\n \n===========///// 1 end //////=========== \n \n";

$needFoods = array_slice($foods, 2, 2); //last 2 indicate length
print_r($needFoods);
echo "\n \n===========///// 2 end //////=========== \n \n";

$needFoods = array_slice($foods, 2, -1);    //last -1 indicate length from last position of array
print_r($needFoods);
echo "\n \n===========///// 3 end //////=========== \n \n";

$needFoods = array_slice($foods, -5, -1);    //last -1 indicate length from last position of array
print_r($needFoods);
echo "\n \n===========///// 4 end //////=========== \n \n";

$needFoods = array_slice($foods, -5, 3);
print_r($needFoods);
echo "\n \n===========///// 5 end //////=========== \n \n";

$needFoods = array_slice($foods, 3, 3, true);   //true show to original offset
print_r($needFoods);
echo "\n \n===========///// 6 end //////=========== \n \n";


//ASSOCIATIVE ARRAY DATA EXTRACT BY ARRAY_SLICE
$foods = array(
    'banana'    =>  23,
    'apple'     =>  24,
    'mango'     =>  25,
    'jackfruit' =>  26,
    56          =>  26,
    'grapes'    =>  27
);

$assFoods = array_slice($foods, 3); //but 56 key didn't show originaly, just offset show
print_r($assFoods);
echo "\n \n===========///// 7 end //////=========== \n \n";

$assFoods = array_slice($foods, 3, null, true); // null indicate length and true show original key
print_r($assFoods);
echo "\n \n===========///// 7 end //////=========== \n \n";

$assFoods = array_slice($foods, -5, 4, true); // true show original key
print_r($assFoods);
echo "\n \n===========///// 7 end //////=========== \n \n";


