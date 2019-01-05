<?php

//FIBONACCI SERIES WITH FOR LOOP
$veryOld = 0;
$old = 1;
$new = 1;

for($i = 0; $i < 10; $i++) {
    echo $veryOld . " ";
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}

echo PHP_EOL;



//FIBONACCI SERIES WITH RECURSIVE FUNCTION
function fibonacci($old, $new, $start, $end) {
    if($start > $end) {
        return;
    }

    $start++;

    echo $old . " ";

    $_tempNew = $old + $new;
    $old = $new;
    $new = $_tempNew;

    fibonacci($old, $new, $start, $end);

}

fibonacci(0, 1, 1, 10);
echo PHP_EOL;



//FIBONACCI SERIES WITH RECURSIVE FUNCTION and STATIC SCOPE
function fibonacci2($old, $new, $end) {
    static $start;  //static scope
    $start = $start ?? 1;

    if($start > $end) {
        return;
    }

    $start++;
    
    echo $old . " ";

    $_tempNew = $old + $new;    //$_temNew is temporary variable so u can use underscore before $
    $old = $new;
    $new = $_tempNew;

    fibonacci2($old, $new, $end);

}

fibonacci2(0, 1, 10);