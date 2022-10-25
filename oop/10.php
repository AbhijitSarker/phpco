<?php
abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }

    abstract function eat();
}

class MyClass extends OurClass{
    function eat(){
        echo "Iam eating";
    }
}


$mc = new MyClass();
echo $mc->sayHi();