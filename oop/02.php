<?php /* 
class Human{
    public $name;
    public $age;

    function __construct($personName, $personAge=0){
       
        $this->name = $personName;
        $this->age = $personAge;
    }
    
    function sayHi(){
            echo "Salam\n";
        }

    function  sayName(){
        if($this->age){
            echo "My name is {$this->name}, I am {$this->age} years old\n";
        }else{
                echo "My name is {$this->name}, I dont know how old i am\n";
        }
        
    }
}

$h1 = new Human("rubel", 21);
$h2 = new Human("hasin", 24);
$h3 = new human("rakhi");

$h1->sayHi();
$h1->sayName();
echo "<br>";
$h2->sayHi();
$h2->sayName();
echo "<br>";
$h3->sayHi();
$h3->sayName(); 