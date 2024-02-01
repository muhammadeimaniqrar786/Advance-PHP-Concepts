<?php

namespace OOP\Abstraction\ViaAbstractClass;

require_once('./Shape.php');

class Rectangle extends Shape
{
    private $width;
    private $height;

    // Constructor
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    // Implementation of abstract method
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle('Rectangle', 4, 6);
echo $rectangle->calculateArea() . PHP_EOL;   // Output: 24
echo $rectangle->getName() . PHP_EOL;      // Output: Rectangle
