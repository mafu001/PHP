<?php

//PARENT AND CHILD CLASS SCOPE
class Animal {
    protected $name;

    function __construct($getName) {
        $this -> name = $getName;
        $this -> say();
    }

    function say() {
    	echo "{$this -> name} say hi \n";
    }
}

class Human extends Animal {
    function say() {
        parent::say();
        echo "mahfuz";
    }
}

$new = new Human("he");