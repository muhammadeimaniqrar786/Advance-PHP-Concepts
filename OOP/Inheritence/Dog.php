<?php

namespace OOP\Inheritance;

use OOP\Animal;

require_once('../Animal.php');

// Inheritance: Create a subclass (Dog) that extends the Animal class
class Dog extends Animal
{
    // Additional property
    public $breed;

    // Constructor overriding
    public function __construct($name, $sound, $breed)
    {
        parent::__construct($name, $sound);
        $this->breed = $breed;
    }
}

$dog = new Dog("Buddy", "Woof", "Golden Retriever");
$dog->makeSound();
