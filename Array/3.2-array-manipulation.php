<?php

//ARRAY MANIPULATION
$class = [
    "seven",
    "eight",
    1234,
    "ten"
];

$class[2] = "nine"; // we can replace any index with offset 2

array_pop($class); // array_pop() put out last index
array_shift($class); // array_unshift() put out first index

$class[] = "eleven"; // we can include any index without offset

array_push($class, "twelve"); // array_push() put in last index
array_unshift($class, "six"); // array_unshift() put in fist index

$arrayCount = count($class);

for ($x = 0; $x < $arrayCount; $x++) {
    echo $class[$x] . "\n";
}




