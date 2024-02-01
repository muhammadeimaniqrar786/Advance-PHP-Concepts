<?php

namespace OOP;

class Animal
{
    // Properties (attributes)
    public $name;
    public $sound;

    // Constructor
    public function __construct($name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }

    // Method to make animal sound
    public function makeSound()
    {
        echo $this->name . ' says ' . $this->sound . PHP_EOL;
    }
}

$animal = new Animal('cat', 'meow');
$animal->makeSound();
