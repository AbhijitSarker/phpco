<?php
class RGB
{
    private $color; //#ff0000
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, "#");
    }

    function getColor()
    {
        return $this->color;
    }

    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    private function parseColor()
    {
        if($this->color){
            list($this->red, $this->green, $blue) = sscanf($this->color, '%02x%02x%02x');
            echo $this->red;
            echo $this->green;
            echo $this->blue;
        }   

    }
}
echo "running";
$myColor = new RGB("#ffef27");