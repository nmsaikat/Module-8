<?php

class Father {
    public $number1 = 100;
    public $number2 = 200;

    public function addTow() {
        echo $this->number1+$this->number2;
    }
}

class Son extends Father{
    public function mulTow(){
        $abba = parent::addTow();
        echo $abba*30;
    }
}

$obj = new Son;
$obj->mulTow();