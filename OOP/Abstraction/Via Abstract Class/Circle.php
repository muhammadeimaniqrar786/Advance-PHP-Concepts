<?php

namespace OOP\Abstraction\ViaAbstractClass;

require_once('./Shape.php');

class Circle extends Shape
{
    private $radius;

    // Constructor
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    // Implementation of abstract method
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle('Circle', 5);
echo $circle->calculateArea() . PHP_EOL;      // Output: 78.539816339745
echo $circle->getName() . PHP_EOL;      // Output: Circle
