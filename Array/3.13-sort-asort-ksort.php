<?php

//ARRAY DATA ADD BY ARRAY_MERGE WITH SLICE
$foodsvlue = array(
    'a' => 'banana',
    'b' => 'apple',
    'c' => 'mango',
    'd' => 'jackfruit',
    'e' => 'pineapple',
    'f' => 'grapes'
);

sort($foodsvlue); // sort show vlue but don't show key
print_r($foodsvlue);

rsort($foodsvlue); // reverse sort
print_r($foodsvlue);

echo "\n \n===========///// 1 end //////=========== \n \n";

$foodsKey = array(
    'a' => 'banana',
    'b' => 'apple',
    'c' => 'mango',
    'd' => 'jackfruit',
    'e' => 'pineapple',
    'f' => 'grapes'
);

asort($foodsKey); //asort show key, value and ascending with value
print_r($foodsKey);

arsort($foodsKey); //reverse asort
print_r($foodsKey);

echo "\n \n===========///// 2 end //////=========== \n \n";

$foodsKey2 = array(
    'a' => 'banana',
    'b' => 'apple',
    'd' => 'jackfruit',
    'f' => 'grapes',
    'c' => 'mango',
    'e' => 'pineapple',
);

ksort($foodsKey2); //ksort show key, value and ascending with key
print_r($foodsKey2);
echo PHP_EOL;

foreach($foodsKey2 as $fKey) {
    echo $fKey . "\n";
}
echo PHP_EOL;

krsort($foodsKey2); //reverse ksort
print_r($foodsKey2);

echo "\n \n===========///// 3 end //////=========== \n \n";

$random = array(44, 5, 50, 2, 3, 0, 1);

sort($random); // but offset show serialy
print_r($random);

echo "\n \n===========///// 4 end //////=========== \n \n";

$random2 = array(44, 5, 50, 2, 3, 0, 1);

asort($random2); // but offset don't show serialy
print_r($random2);

$countRandom = count($random2);
for($x = 0; $x < $countRandom; $x++) {
    echo $random2[$x] . "\n";
}
echo PHP_EOL;

//but u can solve it by foreach loop
foreach($random2 as $randoms) {
    echo $randoms . "\n";
}
echo "\n \n===========///// 5 end //////=========== \n \n";


//case sensitive and case insensitive for sort
$random4 = array(44, 5, 50, 2, 11, 55, 3, 0, 1);
sort($random4, SORT_STRING);
print_r($random4);

$random5 = array("apple", "Orange", "Apple", "orange", "mango", "jackfruit");
sort($random5); //manuali sort arrange it as case sensitive 
print_r($random5);

$random6 = array("apple", "Orange", "Apple", "orange", "mango", "jackfruit");
sort($random6, SORT_STRING | SORT_FLAG_CASE); //but sort_string, sort_flag_case it make insensitive
print_r($random6);

