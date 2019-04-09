<?php
class Cylinder1 extends Circle
{
    public $height ;
    function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    function Area()
    {
        return parent::Area()*$this->height;
    }
    function toString()
    {
        echo "V = " . $this->Area() ;
        echo "<br/>";
    }
}