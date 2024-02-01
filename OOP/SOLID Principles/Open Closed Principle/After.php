<?php

// Definition: Software entities (classes, modules, functions) should be open for extension but closed for modification.

// After applying OCP

interface Shape
{
    public function calculateArea();
}

class Circle implements Shape
{
    public $radius;

    public function calculateArea()
    {
        return 3.14 * pow($this->radius, 2);
    }
}

class Square implements Shape
{
    public $side;

    public function calculateArea()
    {
        return pow($this->side, 2);
    }
}

// Now, you can add new shapes without modifying existing code by adhering to the Shape interface.
