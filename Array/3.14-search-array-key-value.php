<?php

//ARRAY INDEX AND INDEX OFFSET SEARCH WITH IN_ARRAY( ) AND ARRAY_SEARCH( )
$random = array(44, 5, '50', 2, 3, 0, 1);

if(in_array(50, $random)) { //needle, haystack (for search result)
    echo "result is found without true";
}else {
    echo "result was not found without true";
}

echo PHP_EOL;

if(in_array(50, $random, true)) { //needle, haystack, stirct(data-type)
    echo "result is found with true";
}else{
    echo "result was not found with true";
}

echo "\n \n===========///// 1 end //////=========== \n \n";

$random2 = array(44, 5, '50', 50, 2, 3, 0, 1);

$vlueSearch = array_search(50, $random2); //it's declare index offset/position and show only first indexset(but there are two same index)
echo 'array index offset or position is ' . $vlueSearch;

echo PHP_EOL;

$vlueSearch = array_search(50, $random2, true); //it's declare index offset/position
echo 'array index offset or position with true is ' . $vlueSearch;

echo "\n \n===========///// 2 end //////=========== \n \n";

//ARRAY KEY SEARCH WITH KEY_EXISTS( )
$rolls= array(
    'a'       =>  51,
    'two'       =>  52,
    'three'     =>  53,
    'c'      =>  54,
     5          =>  55,
    'six'       =>  56,
     7          =>  57,
);

$searchKey = 5;

if(key_exists( $searchKey, $rolls)) {
    echo "the key {$searchKey} exist here";
}else {
    echo "the key {$searchKey} not exist here";
}