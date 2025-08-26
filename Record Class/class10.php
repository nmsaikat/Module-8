<?php
class Shapes{
    private $shapes;
    function __construct(){
        $this->shapes = array();
    }

    function addShape($shapes){
        array_push($this->shapes, $shapes);
    }

    function totalShapes(){
        return count($this->shapes);
    }

}

class Rectangle{

}

class Tringle{

}

class student{

}

$shapesCollection = new Shapes();
$shapesCollection->addShape(new Rectangle());
$shapesCollection->addShape(new Tringle());
$shapesCollection->addShape(new Student());
echo $shapesCollection->totalShapes();