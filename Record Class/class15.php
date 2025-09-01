<?php
define("OK", 123);

class MyClass {
    const City = "Dhaka";
}

$m = new MyClass();
echo $m::City;