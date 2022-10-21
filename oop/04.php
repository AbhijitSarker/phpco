<?php
class RGB{
    private $color; //#ff0000
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = ''){
        $this->color = ltrim("#",$colorCode);
    }

    function getColor(){
        return $this->color;
    }

    function setColor($colorCode){
        $this->color = ltrim("#",$colorCode);
    }

    function parseColor(){
        $colors = sscanf($this->color, '%02x02x02x');
        print_r($color);
    }
}