<?php
class MathCalculator {
    static function fibonacci($n){
        echo "Fibonacci Series up to {$n} \n";
    }

    function factorial($n) {
        echo "Factorial of {$n} \n";

    }

}

$math = new MathCalculator();
$math->fibonacci(8);
MathCalculator::fibonacci(7);