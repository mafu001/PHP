<?php

//INHERITANCE WITH EXTENDS
class Animal {
    protected $name; //protected will be use by extends class but private will be not

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

    protected function preName($title) {
    	$this -> name = $title . " " . $this -> name; // this is so important
    }
}

class Human extends Animal {
    function say() {
    	$this -> preName("mr.");
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

echo PHP_EOL;

$man -> say(); 
$man -> sleep(); //difference from upper
$cat -> say();

