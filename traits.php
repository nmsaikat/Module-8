<?php
trait hello {
    function sayHello(){
        echo "Hello Everyone\n";
    }

    function sayHi(){
        echo "Hi Everyone\n";
    }
}

trait bay {
    function sayBay(){
        echo "Bay Everyone\n";
    }
}

class Base {
    use hello, bay;
}
class Base2 {
    use hello;
}

$test = new Base();
$test->sayHello();
$test->sayBay();
$test->sayHi();
