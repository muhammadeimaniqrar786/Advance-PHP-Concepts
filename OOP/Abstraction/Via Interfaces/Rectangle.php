<?php

namespace OOP\Abstraction\ViaInterfaces;

require_once('./Shape.php');

class Rectangle implements Shape
{
    private $width;
    private $height;

    // Constructor
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(4, 6);
echo $rectangle->calculateArea() . PHP_EOL;
