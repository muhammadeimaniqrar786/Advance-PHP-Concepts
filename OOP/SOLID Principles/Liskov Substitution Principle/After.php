<?php

// Definition: Subtypes must be substitutable for their base types without altering the correctness of the program.

// After applying LSP

interface Flyable
{
    public function fly();
}

class Bird implements Flyable
{
    public function fly()
    {
        // Logic for flying
    }
}

class Penguin implements Flyable
{
    public function fly()
    {
        // Penguins can't fly, but the method is still implemented
    }
}

// By introducing the Flyable interface, both Bird and Penguin classes adhere to the same interface.
