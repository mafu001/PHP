<?php
//SEARCH STRING REPLACE
$string = "the quick Quick brown Fox jumps over fox the lazy dog";

$replaceString = str_replace("quick", "slow", $string);     //case sensitive
echo $replaceString;
echo PHP_EOL;echo PHP_EOL;

$replaceString2 = str_ireplace("quick", "slow", $string);   //case insensitive
echo $replaceString2;

echo "\n \n===========///// 1 end //////=========== \n \n";

$string2 = "the quick Quick brown Fox fox jumps over fox the lazy dog";

$replaceString = str_ireplace(array("quick","fox"), array("slow", "rat"), $string2, $replace_count);     //case sensitive
echo $replaceString;
echo PHP_EOL;echo PHP_EOL;

echo "total replaced: " . $replace_count . " string"; // u can change the name of $replace_count

