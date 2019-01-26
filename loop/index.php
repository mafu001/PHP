<?php
$x = 20;
$limit = 20;
for($y = 1; $y <= $limit; $y++) {

    // if($y >= 10) {
    //     echo $x . " X " . $y . " = ". $x * $y . "\n";
    // }else {
    //     echo $x . " X 0" . $y . " = ". $x * $y . "\n";
    // }

    printf("%d X %02d = %d", $x, $y, $x*$y);
    echo PHP_EOL;
}

?>