<?php
class Base {
    public static $name = "NM Saikat";

    public function show(){
        echo self::$name;
    }
}

echo Base::$name;

// $test = new Base;
// $test->show();
