<?php
class ParentClass{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi2(){
        echo "HI from {$this->name}";
    }
}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi2();
        echo "Hello";
    }
}

$cc = new ChildClass("abcd");
