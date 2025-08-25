<?php
class Person {
    public $name;
    public $age;
}

$john = new Person(); // object
$john->name = "John Doe";
$john->age = 25;

echo $john->name;

$jane = new Person(); // object
$jane->name = "Jane Doe";
$jane->age = 24;
echo $jane->name;