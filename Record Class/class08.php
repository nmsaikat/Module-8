<?php

// class man{
//     public $name;
//     public $age;
//     public $address;

//     function info (){
//         return 'Nebs IT';
//     }
// }


// $saikat = new man();
// $saikat->name = "NM Saikat\n";
// echo $saikat->name;

// $saki = new man();
// $saki->name = "Saki";
// echo $saki->name;

class calculation{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();

$c1->a = 20;
$c1->b = 10;

$c2 = new calculation();

$c2->a = 50;
$c2->b = 35;

// echo "Sum Value of C1: " . $c1->sum() . "\n";
// echo "Sub Value of C2: " . $c2->sub() . "\n";




class person{
    public $name;
    public $age;

    function __construct($name = "No Name", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name . " - " . $this->age . "\n";
    }
}

$p1 = new person();
$p2 = new person("Yesmin", 15);
$p3 = new person("Sony", 20);

// $p1->name = "NM Saikat";
// $p1->age = 26;

$p1->show();
$p2->show();
$p3->show();