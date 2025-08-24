<?php

class man{
    public $name;
    public $age;
    public $address;

    function info (){
        return 'Nebs IT';
    }
}


$saikat = new man();
$saikat->name = "NM Saikat\n";
echo $saikat->name;

$saki = new man();
$saki->name = "Saki";
echo $saki->name;