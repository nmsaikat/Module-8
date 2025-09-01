<?php
class DistrictCollection {
    private $districts;

    function __construct() {
        $this->districts = array();
    }

    function add($districts){
        array_push($this->districts,$districts);
    }

    // function getDistricts(){
    //     return $this->districts;
    // }

    // function getIterator(){
    //     return new ArrayIterator($this->districts);
    // }

    // function count(){
    //     return count("Countable::count");
    // }
}

$districts = new DistrictCollection;
$districts->add("Dhaka");
$districts->add("Bogura");
$districts->add("Radsahi");

// $_districts = $districts->getDistricts();
// foreach($_districts as $district){
//     echo $district . "\n";
// }
echo current($districts);