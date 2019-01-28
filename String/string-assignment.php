<?php
//every element total count into a string
$name = "mahfuz alam, samrat islam";

$length = strlen($name);
$array = [];

for($i = 0; $i < $length; $i++) {
    $array[$name[$i]] = 0;
}

for($i = 0; $i < $length; $i++) {
    $array[$name[$i]]++;
}

for($i = 0; $i < $length; $i++) {
    if($array[$name[$i]] != 0) {
        echo $name[$i] . " = ". $array[$name[$i]] . "\n";
        $array[$name[$i]] = 0;
    }
}
