<?php

//sum2 function start with normal system
function sum($x, $y, $z) {
    return $x + $y + $z;
}

echo "sum is: " . sum(1, 2, 3);
echo PHP_EOL;

//sum2 function start with select data type
function sum2(int $x, int $y, int $z): int {
    return $x + $y + $z;
}

echo "sum2 is: " . sum2(1, 3, 3);
echo PHP_EOL;

//sum3 function start with less argument
function sum3(int $x = 0, int $y = 0, int $z = 0): int {
    return $x + $y + $z;
}

echo "sum3 is: " . sum3(1, 2); //less argument
echo PHP_EOL;

//sum4 function start with unlimited argument that is needed
function sum4(int...$numbers): int {
    $result = 0;
    for ($x = 0; $x < count($numbers); $x++) {
        $result += $numbers[$x];
    }
    return $result;
}

echo "sum4 is: " . sum4(1, 2, 3, 14); //unlimited argument
