<?php

//ARRAY DATA MODIFY(remove and replace) BY ARRAY_SPLICE
$foods = array('banana', 'apple', 'mango', 'jackfruit', 'pineapple', 'grapes');

$needFoods = array_splice($foods, 2);    // 2 offset indicate to how many data put out from array
print_r($needFoods);
print_r($foods); //but $needFoods are removed
echo "\n \n===========///// 1 end //////=========== \n \n";


$foods2 = array('banana', 'apple', 'mango', 'jackfruit', 'pineapple', 'grapes');
$addNeedFoods = array('orange', 'plum', 'dates');

$needFoods = array_splice($foods2, -4, 3, $addNeedFoods);    // $addNeedFood add vlues

print_r($needFoods); // put out
print_r($foods2); //was changed and replaced
echo "\n \n===========///// 2 end //////=========== \n \n";


