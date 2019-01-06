<?php

//ASSOCIATIVE ARRAY START
$students = [
    '3'     => 'mahim', // 'key' => 'value
    '5'     => 'taj',
    '7'     => 'abir',
    'fail'  => 'sahed',
];

echo $students[5]; // number count auto so no need to quotation
echo PHP_EOL;

echo $students['fail']; // quotation must be use of string
echo PHP_EOL;

echo var_dump($students);
echo PHP_EOL;

$countStudents = count($students);


//array with foreach loop
foreach($students as $key => $value) {
    echo "that key is: " . $key . " and value: ". $value . "\n";
}
echo PHP_EOL;


//array with building function array_keys
$keyFunction =  array_keys($students);
print_r( $keyFunction);
echo PHP_EOL;


//array with building function array_values
$valuesFunction =  array_values($students);
print_r( $valuesFunction);
echo PHP_EOL;


//array with for loop and array_keys()
$keyFunc    = array_keys($students);
$countKey   = count($keyFunc);

for($y = 0; $y < $countKey; $y++) {

    $allKey = $keyFunc[$y];
    echo "that key is: " . $allKey . " and value: " . $students[$allKey] . "\n";
}
echo PHP_EOL;


//array with for loop and array_values()
$valueFunc = array_values($students);
$countValue = count($valueFunc);

for($y = 0; $y < $countValue; $y++) {

    $allKey = $valueFunc[$y];
    echo $allKey . "\n";
}
echo PHP_EOL;


//ASSOCIATIVE ARRAY WITH INCLUED NEW VALUE
$runs = [

    "bangladesh"    => "4, 4, 6",
    "pakistan"      => "2, 3, 4",
    "india"         => "1, 1, 6"
];

$runs["bangladesh"] .= ", 6";
// $runs["bangladesh"] = $runs["bangladesh"] . ", 6";
print_r($runs);