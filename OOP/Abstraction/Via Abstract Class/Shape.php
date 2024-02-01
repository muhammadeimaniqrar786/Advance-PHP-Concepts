<?php

namespace OOP\Abstraction\ViaAbstractClass;

abstract class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method for calculating area
    abstract public function calculateArea();

    public function getName()
    {
        return $this->name;   
    }
}
