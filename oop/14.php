<?php
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        self::doSomething(); //self::$name = 12;
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething(){
        echo "Doing something";
    }

    function factorial($n){
        self::$name = "abcd";
        self::doSomething();
        $this->doSomething();
        $this->number =12;
        echo "Calculating factorial of {$n}";

    }

}  
$mathc = new MathCalculator();
$mathc->factorial(7);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;