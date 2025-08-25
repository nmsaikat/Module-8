<?php
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
    }

    function getName(){
        echo "My Name is {$this->name}";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human();
$h1->name = "Rubel"; // Set Oparetion
$c1 = new Cat();
$d = new Dog();

$h1->sayHi();
// $h1->sayName();
echo $h1->name; // Get Oparetion
// $c1->sayHi();