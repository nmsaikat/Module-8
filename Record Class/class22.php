<?php
class planet {
    static function echoName(){
        echo self::getName();
    }

    static function getName(){
        return "Planet";
    }
}

class Earth extends planet{
    static function getName() {
        return "Earth";
    }
}

Earth::echoName();