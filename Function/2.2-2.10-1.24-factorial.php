<?php

//FACTORIAL WITH type check in FUNCTION
function factor(int $x):int {

    $result = 1;

    for($n = $x; $n > 1; $n--) {
        $result *= $n;
    }
    return $result;
}
$x = 6;
echo "Factorial of {$x} is ". factor($x);
echo PHP_EOL; //php end of the line



//FACTORIAL WITH FOR LOOP
$y = 1;
for($x = $y, $factorial = 1; $x > 0; $x--) {
    $factorial *= $x;
}
printf("Factorial of %d is %d", $y, $factorial);
// echo "Factorial of {$y} is " . $factorial;
echo PHP_EOL; //php end of the line



//FACTORIAL WITH RECURSIVE FUNCTION
function factorial($x) {
    if($x <= 1) {
        return 1;
    }
    
    return $x * factorial($x - 1);
}
echo factorial(7);