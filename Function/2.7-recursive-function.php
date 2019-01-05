<?php

// recursive function start
function recur($i) {
    if ($i >= 10) {
        return;
    }

    echo $i . "\n";

    $i++;

    recur($i);
}

recur(0);
echo PHP_EOL; //php end of line


// recursive function start with Counter, End and Stepping
function printNumber($counter, $end, $stepping = 1) {
    if ($counter > $end) {
        return;
    }

    echo $counter . "\n";

    $counter += $stepping;

    printNumber($counter, $end, $stepping);
}

printNumber(20, 30, 2);