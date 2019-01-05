<?php

$x = 8;
$y = 4;

$result = $x <=> $y; // ($x < $y) = -1, ($x = $y) = 0, ($x > $y) = 1 [<=> spaceship-oparetor]

if ($result == 1) {
    echo "{$x} is Greater than {$y}";
} else if ($result == 0) {
    echo "{$x} is Equal to {$y}";
} else if (($x <=> $y) == -1) {
    echo "{$x} is Smaller than {$y}";
}

echo PHP_EOL; //end of the line

$x = 2;
$y = 4;

if (($x <=> $y) == 1) {
    echo "{$x} is Greater than {$y}";
} else if (($x <=> $y) == 0) {
    echo "{$x} is Equal to {$y}";
} else {
    echo "{$x} is Smaller than {$y}";
}
