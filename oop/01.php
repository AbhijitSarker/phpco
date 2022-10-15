<?php 
class Human{
    public $name;
    function sayHi(){
            echo "Salam\n";
        }

    function  sayName(){
        echo "My name is {$this->name}\n";
    }
}
class Cat{
    public $name;
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    public $name;
    function sayHi(){
        echo "Woof";
    }
}


$h1 = new Human();
$h2 = new Human();

$h1-> name ="rubel"; //set
$h2->name = "hasin";

// $c1 = new Cat();

// $d1 = new Dog();

$h1->sayHi();
$h1->sayName();
//echo $h1->name; //get
// $c1->sayHi();
// $d1->sayHi();

$h2->sayHi();
$h2->sayName();
// echo $h2->name;