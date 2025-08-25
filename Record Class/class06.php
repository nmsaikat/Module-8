<?php
class ParentClass{
    function __construct(){

    }

    function sayHi(){
        echo "Hi";
    }

}

class ChildClass extends ParentClass{
    
    function sayHi(){
        echo "Hello";
    }
}