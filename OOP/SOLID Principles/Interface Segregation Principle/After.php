<?php

// Definition: A class should not be forced to implement interfaces it does not use.

// After applying ISP

interface Workable
{
    public function work();
}

interface Eatable
{
    public function eat();
}

class Human implements Workable, Eatable
{
    public function work()
    {
        // Human working
    }

    public function eat()
    {
        // Human eating
    }
}

class Robot implements Workable
{
    public function work()
    {
        // Robot working
    }
}

// Now, the Human and Robot classes implement only the interfaces relevant to their capabilities.
