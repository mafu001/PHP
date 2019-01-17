<?php

//INHERITANCE WITH EXTENDS
class Animal {
    protected $name; //protected will be use by other class but private will be not

    function __construct($toName) {
        $this -> name = $toName;
    }

    function eat() {
        echo "{$this -> name} is eating";
    }

    function run() {
        echo "{$this -> name} is running  \n";
    }
    function sleep() {
        echo "{$this -> name} is sleeping  \n";
    }

    function say() {}
}

class Human extends Animal {
    function say() {
        echo "{$this -> name} says hi \n";
    }
}

class Cat extends Animal {
    function say() {
        echo "{$this -> name} says mew \n";
    }
}

$man = new Human("Mahfuz");
$cat = new Cat("pushi");

$man -> sleep(); //inheritance
$man -> say(); //extends
$cat -> say();