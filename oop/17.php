<?php
define('ok',123);


class MyClass{
    const CITY = "dhaka";

    function sayHi(){
        echo "hi from".self::CITY;
    }
}

$m = new Myclass();
$m->sayHi();
$m::CITY;