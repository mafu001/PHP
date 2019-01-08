<?php

//ANY ARRAY DATA REMOVE BY UNSET() FUNCTION
$class = array('seven'=>'mahim', 'two'=> 'taj');
print_r($class);

unset($class['two']); // unset() use for remove any data from array
print_r($class);
echo "\n \n===========///// 1 end //////=========== \n \n";

//VALUE CHECK WITH ISSET , EMPTY AND IS_NUMERIC
$name = " ";

if(isset($name)) {
    echo "value is here";
}else {
    echo "value is not here";
}
echo "\n \n===========///// 2 end //////=========== \n \n";


if(empty($name)) {
    echo "value is empty";
}else {
    echo "value is not empty";
}
echo "\n \n===========///// 3 end //////=========== \n \n";


//if variable value is changed
$name = 0;

if(isset($name)) {
    echo "value is here";
}else {
    echo "value is not here";
}
echo "\n \n===========///// 4 end //////=========== \n \n";

if(empty($name)) {
    echo "value is empty";
}else {
    echo "value is not empty";
}
echo "\n \n===========///// 5 end //////=========== \n \n";



//VALUE CHECK WITH ISSET AND IS_NUMERIC
$name = '';

if(isset($name) && is_numeric($name) || $name != '') {
    echo " value is here " ;
}else {
    echo "value is not here";
}

// if((isset($name) && is_numeric($name)) || ($name != '' && $name !=' ')) {
//     echo " value is here " ;
// }else {
//     echo "value is not here";
// }