<?php
class planet {
    public $name;
    function __construct($name) {
        $this->name = $name;
    }
}

$e = new planet("Earth");
$e2 = $e;
$e1 = new planet("Earth");
$m = new planet("Mars");

if ($e === $e2) {
    echo "Similar planets";
}else{
    echo "Not similar planets";
}