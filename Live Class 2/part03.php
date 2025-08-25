<?php

Class Father {
    public $msg ="Message ABC";
    public function print100() {
        for($i = 0; $i<=100; $i++) {
            echo "$i \n";
        }
    }
}

class Son extends Father{

}

$objSon = new Son;
echo $objSon->msg;
$objSon->print100();