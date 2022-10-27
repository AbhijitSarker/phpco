<?php
class A
{
    protected static $name;
    static function sayHi(){
        self::$name ="hello\n";
        echo "hi from a\n";
    }
}

class B extends A{
    static function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "hi from b\n";
        
    }
}

B::sayHi();

// echo B::sayHi();