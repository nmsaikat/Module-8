<?php
// Class তৈরি করা হলো
// class Car {
//     // Property (গাড়ির বৈশিষ্ট্য)
//     public $name;
//     public $color;

//     // Method (গাড়ির কাজ)
//     function set_name($carName) {
//         $this->name = $carName;  // $this = বর্তমান Object বোঝায়
//     }

//     function get_name() {
//         return $this->name;
//     }
// }

// // Object তৈরি করা হলো
// $car1 = new Car();   // Car class থেকে Object বানানো হলো
// $car1->set_name("Toyota");

// $car2 = new Car();   // আরেকটি Object
// $car2->set_name("BMW");

// // Output
// echo $car1->get_name(); // Toyota
// echo "<br> \n";
// echo $car2->get_name(); // BMW


class Persone {
    public $name = "NM Saikat";
    public $address = "Dhaka";
    public $age = 24;
}

$p = new Persone();
echo $p->name;
echo "\n";
echo $p->address;
echo "\n";
echo $p->age;


