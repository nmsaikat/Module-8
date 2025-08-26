<?php
class employee {
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Name: ".$this->name."\n";
        echo "Age: ".$this->age."\n";
        echo "Salary: ".$this->salary."\n";
    }
}

class manager extends employee {
}

$e1 = new manager("NM Saikat", 24, 40000);

// $e1 = new employee("NM Saikat", 24, 40000);
$e1->info();