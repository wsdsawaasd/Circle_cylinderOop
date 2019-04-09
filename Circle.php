<?php


class Circle
{
    public $radius;
    public $color;

    function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    function getRadius()
    {
        return $this->radius;
    }

    function getColor()
    {
        return $this->color;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function Area()
    {
        return pi() * $this->radius * $this->radius;
    }
    function toString() {
        echo "Area = " . $this->Area() ;
        echo "<br/>";
        echo "Radius = " . $this->radius ;
        echo "<br/>";
        echo "color = " . $this->color ;
    }
}