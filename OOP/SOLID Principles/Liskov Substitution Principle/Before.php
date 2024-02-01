<?php

//  Before applying LSP

class Bird
{
    public function fly()
    {
        // Logic for flying
    }
}

class Penguin extends Bird
{
    public function fly()
    {
        // Penguins can't fly, but the method is still overridden
    }
}
