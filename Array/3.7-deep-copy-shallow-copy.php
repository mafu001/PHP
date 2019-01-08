<?php

//DEEP COPY AND SHALLOW COPY BY VARIABLE
$class = array('seven'=>'mahim', 'two'=> 'taj');
$deepCopy = $class; //copy by value
$deepCopy['two'] ='kaji';

print_r($class);
print_r($deepCopy);
echo "\n \n===========///// 1 end //////=========== \n \n";

$class = array('seven'=>'mahim', 'two'=> 'taj');
$shallowCopy = &$class; //coyp by reference, just add & to declare it
$shallowCopy['two'] ='kaji';

print_r($class);
print_r($shallowCopy);
echo "\n \n===========///// 2 end //////=========== \n \n";



//DEEP COPY AND SHALLOW COPY BY FUNCTION
$faClass = array('ten'=>'mamun', 'twelve'=> 'mahfuz');

function funDeepCopy($faClass) {    //deep copy
    $faClass['twelve'] .= ' alam';
    print_r($faClass);
}

funDeepCopy($faClass);
print_r($faClass);
echo "\n \n===========///// 3 end //////=========== \n \n";


$faClass = array('ten'=>'mamun', 'twelve'=> 'mahfuz');

function funShallowCopy(&$faClass) {    //shallow copy, just add & to declare it
    $faClass['twelve'] .=' alam';
    print_r($faClass);
}

funShallowCopy($faClass);
print_r($faClass);