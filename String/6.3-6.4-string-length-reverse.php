<?php

$name = "mahfuz alam";

echo $name[0] . "\n";
echo $name[-1] . "\n";

echo subStr($name, -3, 3) . "\n";   //last 3 digit

$strLength = strlen($name);
echo subStr($name, $strLength-3);   //last 3 digit

echo "\n \n===========///// 1 end //////=========== \n \n";


$name2 = "hello world";

echo strrev($name2);    //reverse name
echo PHP_EOL;

$strLength = strlen($name2) - 1;
for($x = $strLength; $x >= 0; $x--) {
    echo $name2[$x];    //reverse name
}
echo PHP_EOL;

$sLength = strlen($name2);
for($x = 1; $x <= $sLength; $x++) {
    echo $name2[$x * -1];    //reverse name
}

echo "\n \n===========///// 2 end //////=========== \n \n";