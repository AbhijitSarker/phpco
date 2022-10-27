<?php
interface BaseAnimal{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}



$cat = new Animal();
echo $cat instanceof Human;


// $h = new Human();
// echo $h instanceof BaseHuman;

abstract class AbstracatHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am eating";
    }
}

class Human extends AbstracatHuman{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function canTalk(){}
    function run(){}
}