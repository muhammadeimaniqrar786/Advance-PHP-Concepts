<?php

namespace OOP\Abstraction\ViaInterfaces;

require_once('./Shape.php');

class Circle implements Shape
{
    private $radius;

    // Constructor
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementation of interface method
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle(5);
echo $circle->calculateArea() . PHP_EOL;
