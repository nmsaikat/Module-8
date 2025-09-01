<?php
class Base {
    protected static $name = "NM";

    public function show(){
        echo self::$name;
        echo static::$name;
    }
}

class Derived extends Base {
    protected static $name = "Saikat";
}

$test = new Derived();
$test->show(); // Outputs: NM