<?php
class Huma{
    public $name;
    function __construct(){
        echo "New Human Object Is Created\n";
        // $this->name = $personeName;
    }
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }

    function sayName(){
    echo "My Name is {$this->name} \n";
    }
}

$h1 = new Huma();
$h1->sayHi();

