<?php

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = ''){
        $this->color = ltrim($colorCode, "#");
    }

    function getColor(){
        return $this->color;
    }

    function setColor($colorCode){
        $this->color = ltrim($colorCode, "#");
        $this->paraseColor();
    }

    private function paraseColor(){
        if ($this->color){
        $colors = sscanf($this->color,'%02x%02x%02x');
        print_r($colors);
        }
    }
}

$myColor = new RGB("#ffef27");
