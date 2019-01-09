<?php

//ARRAY INDEX WITH COMMON ELEMENTS
$random1 = array(44, 15, '50', 2, 31, 0, 10);
$random2 = array(44,  5, '50', 3,  2, 0,  1);

$indCommon = array_intersect($random1, $random2); //it's work on value and show offset of first array
print_r($indCommon);

echo PHP_EOL;

$indCommon = array_intersect_assoc($random1, $random2); //it's work on key and value
print_r($indCommon);

echo "\n \n===========///// 1 end //////=========== \n \n";

$rolls1 = array('a' =>  51, 'two' =>  52, 'three' =>  53,'c' =>  54,'six' =>  56);
$rolls2 = array('b' =>  51, 'two' =>  50, 'three' =>  53,'c' =>  74,'six' =>  56);

$assoCommon = array_intersect($rolls1, $rolls2); //it's work on value and show offset of first array
print_r($assoCommon);

echo PHP_EOL;

$assoCommon = array_intersect_assoc($rolls1, $rolls2); //it's work on key and value
print_r($assoCommon);

echo "\n \n===========///// 2 end //////=========== \n \n";


//ARRAY INDEX WITHOUT COMMON ELEMETS
$random1 = array(44, 15, '50', 2, 31, 0, 10);
$random2 = array(44,  5, '50', 3,  2, 0,  1);

$indUncommon = array_diff($random1, $random2); //it's work on value and show offset of first array
print_r($indUncommon);

echo PHP_EOL;

$indUncommon = array_diff_assoc($random1, $random2); //it's work on key and value
print_r($indUncommon);

echo "\n \n===========///// 3 end //////=========== \n \n";

$rolls1 = array('a' =>  51, 'two' =>  52, 'three' =>  53,'c' =>  54,'six' =>  56);
$rolls2 = array('b' =>  51, 'two' =>  50, 'three' =>  53,'c' =>  74,'six' =>  56);

$assoUncommon = array_diff($rolls1, $rolls2); //it's work on value and show offset of first array
print_r($assoUncommon);

echo PHP_EOL;

$assoUncommon = array_diff_assoc($rolls1, $rolls2); //it's work on key and value
print_r($assoUncommon);

echo "\n \n===========///// 4 end //////=========== \n \n";