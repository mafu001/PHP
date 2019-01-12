<?php
//TRIM IN STRING
$string = " the quick Quick brown Fox jumps over fox the lazy dog, ";

$trimTwoSide = trim($string, ' ,'); // trim form fist and last
echo $trimTwoSide;
echo PHP_EOL;echo PHP_EOL;

$trimLeftSide = ltrim($string); //but right side still
echo $trimLeftSide;
echo PHP_EOL;echo PHP_EOL;

$trimRightSide = rtrim($string, " ,"); //but left side still
echo $trimRightSide;

echo "\n \n===========///// 1 end //////=========== \n \n";

//WORD WRAP IN STRING
$string2 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum repellat voluptas quisquam explicabo dolore, totam aliquam asperiores vero optio harum praesentium id consectetur quos. Recusandae velit quia repudiandae laborum reiciendis.";

$wrap = wordwrap($string, 20);
echo $string2;
echo PHP_EOL;echo PHP_EOL;

$string3 = "Lorem ipsum dolor sit amettttttttttttttt, consectetur adipisicing elit. Rerum repellat voluptas quisquam explicabo dolore, totam aliquam asperiores vero optio harum praesentium id consectetur quos. Recusandae velit quia repudiandae laborum reiciendis.";

$wrap = wordwrap($string, 20, "\n", true);
echo $string3;