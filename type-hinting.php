<?php
function sum(array $name) {
    foreach ($name as $nam) {
        echo $nam . "\n";
    }
}

$test = ["Apple", "Banana", "Orange"];
sum($test);


class hello{
    public function sayHello() {
        echo "Hello Everyone!\n";
    }
}

class bay{
    public function sayBay(){
        echo "Bay Everyone!\n";
    }
}

function wow(hello $c){
    $c->sayHello();
}

$test = new hello();
wow($test);