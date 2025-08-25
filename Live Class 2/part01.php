<?php

class Car {
    public $color = "Red";

    public function drive() {
        echo "Car is driving";
    }

    public function __construct(){
        echo "I am construct \n";
    }
}

$obj = new Car();
echo $obj->color;
echo "\n";
echo $obj->drive();