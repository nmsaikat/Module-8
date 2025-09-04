<?php
trait hello {
    public function sayHello(){
        echo "Hello Form hello Trait\n";
    }
}

trait Hi {
    public function sayHello(){
        echo "Hello Form Hi Trait\n";
    }
}

class Base {
    use hello, Hi{
        hello::sayHello insteadof Hi;
        Hi::sayHello as sayHi;
    }
}

$test = new Base();
$test->sayHello();
$test->sayHi();