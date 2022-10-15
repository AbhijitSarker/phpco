<?php 
class Human{
    public $name;

    function __construct($personName){
        echo "new human object created\n";
        $this->name = $personName;
    }
    
    function sayHi(){
            echo "Salam\n";
        }

    function  sayName(){
        echo "My name is {$this->name}\n";
    }
}

$h1 = new Human("rubel");
$h1->sayHi();