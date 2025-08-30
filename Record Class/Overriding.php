<?php
class Base {
    public $name = "Parent Class \n";

    public function calc($a , $b) {
        return $a * $b;
    }
}

class derived extends Base {
    public $name = "Child Class \n";

    public function calc($a , $b) {
        return $a + $b;
    }
}

$test = new Base();
echo $test->calc(a:5, b:10); // Outputs: Parent Class

$test2 = new derived();
// echo $test2->calc(a:15, b:20); // Outputs: Child Class
