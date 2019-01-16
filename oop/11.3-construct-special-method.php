<?php

//CONSTRUCTOR START
class Human {

    public $say;

    function __construct($new1) {
        $this -> say = $new1;
    }

    function sayHi() {
        echo "salam \n";
        $this -> sayHi2();
    }

    function sayHi2() {
        echo "my name is {$this->say}\n";
    }
}

$h = new Human("mahfuz");   //object $h
// $h-> say = "rubel";
$h -> sayHi();

echo "\n \n===========///// 1 end //////=========== \n \n";

class Name {

    public $name;
    public $age;

    function __construct($nameArgu, $ageArgu = 0) { //default argument pass 0
        $this -> name = $nameArgu;
        $this -> age = $ageArgu;
    }

    function won() {
        $this -> wonDetails();
    }

    function wonDetails() {
        if($this -> age) {
            echo "My name is {$this -> name} and i am {$this -> age} years old \n\n";
        } else {
            echo "My name is {$this -> name} but i don't know how old i am \n\n";
        }
    }
}

$nameObject = new Name("mahfuz", 27);
$nameObject2 = new Name("taj");

$nameObject -> won();
$nameObject2 -> won();

