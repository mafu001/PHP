<?php

//PRIVATE PROPERTIES
class RGB {
    private $color; //ff0000
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = "") {
        $this -> color = ltrim($colorCode, "#");
        $this -> parseColor();
    }

    function getColor() {
        return $this -> color;
    }

    function getRGBColor() {
        return array($this -> red, $this -> green, $this -> blue);
    }

    function readRGBColor() {
        echo " Red = {$this -> red} \n Green = {$this -> green} \n Blue = {$this -> blue}";
    }

    function setColor() {
        $this -> color = ltrim($colorCode, "#");
        $this -> parseColor();
    }

    private function parseColor() {
        if($this -> color) {
            list($this -> red, $this -> green, $this -> blue) = sscanf($this -> color, '%02x%02x%02x');
        }else {
            list($this -> red, $this -> green, $this -> blue) = array(0, 0, 0);
        }
    }

    function getRed() {
        return $this -> red;
    }

    function getGreen() {
        return $this -> green;
    }

    function getBlue() {
        return $this -> blue;
    }
}

$myColor = new RGB("ffef27");

$myColor -> readRGBColor();