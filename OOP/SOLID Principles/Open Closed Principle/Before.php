<?php

// Before applying OCP

class Circle
{
    public $radius;

    public function calculateArea()
    {
        return 3.14 * pow($this->radius, 2);
    }
}

// In the above example, if you want to add another shape, you would need to modify the Circle class.
