<?php

//ARRAY UTILITY FUNCTION
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function square($n) {
    printf("the square of %d is %d \n", $n, $n*$n); // return doesn't work like array_map
}

array_walk($numbers, 'square');

echo "\n \n===========///// 1 end //////=========== \n \n";

$numbers2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function cube($n) {
    return $n * $n * $n;
}

$newArray = array_map('cube', $numbers2); // make new array with return and cube is callback function only for here

print_r($numbers2); // old array no change

print_r($newArray); 

echo "\n \n===========///// 2 end //////=========== \n \n";

$numbers3 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function even($n) {
    return $n % 2 == 0;
}

$newArray = array_filter($numbers3, 'even'); // make new array with return and check condition on every index

print_r($numbers3); // old array no change

print_r($newArray); 

echo PHP_EOL;

$student = array("sumon", "mahfuz", "somrat", "ajad", "raihan", "shahin");

function filterByName($name) {
    return $name[0] == "s";
}

$newArray = array_filter($student, 'filterByName'); // make new array with return and check condition on every index

print_r($student); // old array no change

print_r($newArray); 

echo "\n \n===========///// 3 end //////=========== \n \n";

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function sum($oldNumber, $newNumber) {
    if($newNumber % 2 == 0) {
        return $oldNumber + $newNumber;
    }
    return $oldNumber;
}

$sumAll = array_reduce($numbers, 'sum'); //it's calculation all index

echo $sumAll;