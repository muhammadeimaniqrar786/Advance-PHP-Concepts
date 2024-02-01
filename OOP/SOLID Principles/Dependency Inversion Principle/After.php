<?php

// Definition: High-level modules should not depend on low-level modules, but both should depend on abstractions. 
//             Abstractions should not depend on details; details should depend on abstractions.

// After applying DIP

interface Switchable
{
    public function turnOn();
}

class LightBulb implements Switchable
{
    public function turnOn()
    {
        // Logic to turn on the light bulb
    }
}

class Toggler
{
    private $device;

    public function __construct(Switchable $device)
    {
        $this->device = $device;
    }

    public function operate()
    {
        // Operate the switch
        $this->device->turnOn();
    }
}

// Now, the Switch class depends on the Switchable interface, allowing for flexibility and easier testing. 
// Different devices can be switched by implementing the Switchable interface.
