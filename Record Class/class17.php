<?php
class DistrictCollection {
    private $districts;

    function __construct() {
        $this->districts = array();
    }

    function add($districts){
        array_push($this->districts,$districts);
    }

    function getDistricts(){
        return $this->districts;
    }
}

$districts = new DistrictCollection;
$districts->add("Dhaka");
$districts->add("Bogura");

$_districts = $districts->getDistricts();
foreach($_districts as $district){
    echo $district . "\n";
}