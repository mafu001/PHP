<?php

//ARRAY PART-1
$myName = array(
    "md",
    "mahfuz",
    "alam",
    "mamun",
    123,
);

// $myName = [
//     "md",
//     "mahfuz",
//     "alam",
//     "mamun",
//     123,
// ];

echo $myName[2] . "\n"; // 0, 1, 2 etc is called offset of array

var_dump($myName); // show number of array and their data type
echo PHP_EOL;

echo count($myName);
echo "\n============\n";

$numArray = count($myName);
for ($i = 0; $i < $numArray; $i++) { //show from up
    echo $myName[$i] . "\n";
}
echo PHP_EOL;

$numArray = count($myName);
for ($i = $numArray - 1; $i >= 0; $i--) { //show from bottom

    $allCount = $myName[$i];
    echo strToupper($allCount) . "\n"; //with uppercase
}


