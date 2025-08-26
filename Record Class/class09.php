<?php
abstract class OurClass {
    final function doSomethink() {
        echo "Doing something";
    }
}

class MyClass extends OurClass {
    
}

$mc = new MyClass();
$mc->doSomethink();