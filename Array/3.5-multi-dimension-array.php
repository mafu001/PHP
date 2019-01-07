<?php

//MULTI DIMENSION ARRAY OR NESTED ARRAY
//echo "===========//////1 end///////=========== \n";
$students = [
    'rol-3'     => explode(', ', 'mahim, akash, jafor',), 
    'rol-5'     => explode(', ', 'taj',),
    'rol-7'     => explode(', ', 'abir',),
];
print_r($students);
echo "===========//////1 end///////=========== \n";

array_push($students['rol-3'], 'mia');
print_r($students);
echo "===========//////2 end///////=========== \n";


$testAll = [
    'test-1'    => [
        'test-2'    => [
            '1',
            '2',
            '3',
            '4',
        ]
    ]
];

echo $testAll['test-1']['test-2'][3];
echo PHP_EOL;
echo "===========//////3 end///////=========== \n";

$testIndex = [
    [1, 2, 3, 4, 5],
    4,
    [5, 9, 10],
    [8, 9, 3,[
        1, 3, 5
    ]]
];

echo $testIndex[3][3][2];   //want to show last 2 offset of 3 index of 4 index





