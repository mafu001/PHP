<?php
//OBJECT, CLASS, PROPERTIES AND METHODS START

class Human {

    public $say;

    function sayHi() {
        echo "salam \n";
    }

    function sayHi2() {
        echo "salam {$this->say}\n";
    }
}

class Cat {
    function sayHi() {
        echo "meow \n";
    }
}

class Dog {
    function sayHi() {
        echo "woof \n";
    }
}

$h = new Human();   //object $h
$c = new Cat();   //object $c
$d = new Dog();   //object $d

$h -> sayHi();
$c -> sayHi();
$d -> sayHi();

$h->say = "salam \n"; //assign and set
echo $h -> say; //get

$h -> sayHi2();

