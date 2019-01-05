<?php

//GLOBAL SCOPE START
$x = 3;

function golScope() {
    global $x;  //shouldn't use it normaly
    echo $x;
}

golScope();
echo PHP_EOL; //php end of the line



//SUPER GLOBAL SCOPE START
$y = 5;

function sgloScope() {
    echo $GLOBALS['y']; //php default super global variable
}

sgloScope();
echo PHP_EOL; //php end of the line



//LOCAL SCOPE START
function locScope() {
    global $z;
    $z = "That's local scop"; // local scop of this function
}

locScope();
echo $z;
echo PHP_EOL; //php end of the line



//STATIC SCOPE START
function staScope() {
    
    static $x;  //static scope of this function
    $x = $x ?? 0;
    $x++;
    echo $x;
    echo PHP_EOL;
}

staScope();
staScope();
staScope();

