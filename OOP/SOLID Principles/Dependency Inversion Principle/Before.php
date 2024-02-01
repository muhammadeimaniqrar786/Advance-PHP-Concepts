<?php

// Before applying DIP

class LightBulb
{
    public function turnOn()
    {
        // Logic to turn on the light bulb
    }
}

class Toggler
{
    private $bulb;

    public function __construct(LightBulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function operate()
    {
        // Operate the switch
        $this->bulb->turnOn();
    }
}
