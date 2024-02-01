<?php

// Before applying ISP

interface Worker
{
    public function work();
    public function eat();
}

class Human implements Worker
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

class Robot implements Worker
{
    public function work()
    {
        // Robot working
    }

    public function eat()
    {
        // Robot can't eat, but the method is still implemented
    }
}
