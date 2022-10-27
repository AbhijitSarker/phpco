<?php
class A{
    static function sayHi(){
        echo "hi from a\n";
    }
}

class B extends A{
    static function sayHi(){
        parent::sayHi();
        echo "hi from b\n";
        
    }
}

B::sayHi();