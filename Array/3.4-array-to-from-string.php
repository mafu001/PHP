<?php

//STRING TO ARRAY AND ARRAY TO STRING
$books = explode(', ', 'english, bangla, math, zoology, chemistry'); //php building function explode separate by koma and space(called delimiter ) that is use string
// $books = 'english, bangla, math, zoology, chemistry';

var_dump($books);
echo PHP_EOL;

echo $books[0]; // u can get result without vur_dump() by echo
echo PHP_EOL;
echo PHP_EOL;

$booksStringJoin = join(', ', $books); //join make array from string again
echo $booksStringJoin;
echo PHP_EOL;
echo PHP_EOL;

$booksStringImplode = implode(', ', $books); //implode make array from string again
echo $booksStringImplode;
echo PHP_EOL;

$ebooks = preg_split('/(, |,)/' , 'islamic-stady, history,socioloy'); //preg_split indicate how will delimiter be and it make array
print_r($ebooks);

echo PHP_EOL;
echo count($ebooks);
