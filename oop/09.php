<?php
class Shape{
    function getArea(){}
    function getPerimeter(){}
}

class Rectangle extends Shape{
    private $base, $height;

    function __construct($base, $height){
        $this->base =$base;
        $this->height =$height;
    }
    public setBase($base){
        $this->base =$base;
    }
    public setHeight($height){
        $this->height =$height;
    }
    function getArea(){
        return
    }
}