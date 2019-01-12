<?php
//SEARCH STRING FORM STRING
$name = "Md Mahim kaji";

$searchPosition = strpos($name, "mahim"); // case sensitive, so will not show
echo $searchPosition; // u don't get the result
echo PHP_EOL;

$searchPosition = stripos($name, "mahim"); // case insensitive
echo $searchPosition;
echo PHP_EOL;echo PHP_EOL;

$reverseString = "the quick brown Fox jumps over fox the lazy dog";
$revSearch = "fox";

$revSearResult = strripos($reverseString, $revSearch); // reverse search the result last position form first
echo $revSearResult;
echo PHP_EOL;echo PHP_EOL;

$names = "the quick brown Fox jumps over fox the lazy dog";

$search = "fox";
$searchPosition = strpos($names, $search, 12); //12 indicate search offset after 12
echo "'{$searchPosition}' is the offset of'{$search}' after offset '12' that you input"; 

echo "\n \n===========///// 1 end //////=========== \n \n";

$practice = "the quick brown Fox jumps over fox the lazy dog";
$pracSearch = "the";
$nameSearchPos = strpos($names, $pracSearch);

if($nameSearchPos !==false) { // u must be check data type with !==
    echo "Search result is found";
}else {
    echo "Search result is not found";
}
