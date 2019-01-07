<?php

//ASSOCIATIVE ARRAY TO STRING
$united = array(
    'home'      =>  'total 1 bilion',
    'office'    =>  'total 30 milion',
    'people'    =>  '30 bilion'
);
print_r($united);
echo "\n \n===========///// 1 end //////=========== \n \n";

printf("home %s and pople %s", $united['home'], $united['people']);
echo "\n \n===========///// 2 end //////=========== \n \n";

$serialized = serialize($united); //serialize() make associative array to string
print_r($serialized);
echo "\n \n===========///// 3 end //////=========== \n \n";

$unserialized = unserialize($serialized); //unserialize() make string to array
print_r($unserialized);
echo "\n \n==========///// 4 end //////=========== \n \n";


$jsonData = json_encode($united);
echo $jsonData;
echo "\n \n==========///// 4 end //////=========== \n \n";

$djsonData = json_decode($jsonData);
print_r($djsonData);
echo "\n \n==========///// 5 end //////=========== \n \n";

$djsonData = json_decode($jsonData, true); //for convert stdClass object to array
print_r($djsonData);