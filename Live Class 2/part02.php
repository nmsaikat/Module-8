<?php

class Car {
    public static $color = "Green \n";

    public static function drive(){
        echo "Car is Driving \n";
    }
}

echo Car::$color;
echo Car::drive();