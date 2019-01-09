<?php

$name = "mahfuz alam, samrat islam";

$part = explode(', ', $name);   //to make part part
print_r($part);

$join = implode(' ', $part);    //to make join of part
print_r($join);
echo PHP_EOL;

$join2 = join(' ', $part);  //to make join of part
print_r($join2);
echo PHP_EOL;

$partOneByone = str_split($name);  //to make join of part
print_r($partOneByone);

echo "\n \n===========///// 2 end //////=========== \n \n";

$animal = "the royal, bangle Tiger";
$fetch = strtok($animal, ' ');
// print_r($fetch);

echo PHP_EOL;
while($fetch !== false) {
    echo $fetch . "\n";
    $fetch = strtok(', '); //delimiter
}
echo PHP_EOL;

$animals  = "the quick brown fox, jumps over the lazy dog";
$regularExpresion = preg_split("/ |, /", $animals);
print_r($regularExpresion);