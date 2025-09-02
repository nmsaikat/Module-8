<?php
class MotorCycle {
    private $parameters;
    private $displacement, $capacity, $mileage;
    function __construct($displacement, $capacity, $mileage) {
        $this->parameters = [];
        $this->parameters["mileage"] = $mileage;
        $this->parameters["displacement"] = $displacement;
        $this->parameters["capacity"] = $capacity;
    }
    function getDisplacement(){
        return $this->parameters["displacement"];
    }
    function setDisplacement($displacement){
         $this->parameters["displacement"] = $displacement;
    }

    function __get($name) {
        echo $this->parameters[$name];
    }

    function __set($name, $value) {
        $this->parameters[$name] = $value;
    }
}

$pulsar = new MotorCycle("150cc", "16ltr", "40kmpl");
echo $pulsar->displacement = "135cc";
echo "\n";
echo $pulsar->displacement;