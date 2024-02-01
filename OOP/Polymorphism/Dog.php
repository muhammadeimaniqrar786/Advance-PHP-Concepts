<?php

namespace OOP\Polymorphism;

use OOP\Animal;

require_once('../Animal.php');

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

    // Polymorphism: Override the makeSound method
    public function makeSound()
    {
        echo $this->name . " barks: " . $this->sound . PHP_EOL;
    }
}

$dog = new Dog("Buddy", "Woof", "Golden Retriever");
$dog->makeSound();
