<?php

namespace OOP\Encapsulation;

use OOP\Animal;

require_once('../Animal.php');

class Dog extends Animal
{
    // Additional property
    private $breed;

    // Constructor overriding
    public function __construct($name, $sound, $breed)
    {
        parent::__construct($name, $sound);
        $this->breed = $breed;
    }

    // Encapsulation: Getter method for the breed property
    public function getBreed()
    {
        return $this->breed;
    }
}

$dog = new Dog("Buddy", "Woof", "Golden Retriever");
$dog->makeSound();
echo $dog->getBreed();
