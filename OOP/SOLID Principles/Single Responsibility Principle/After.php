<?php

// Defination: A class should have only one reason to change, meaning it should have only one responsibility.

// After applying SRP

class User
{
    public function saveUser()
    {
        // Logic to save user to the database
    }
}

class EmailService
{
    public function sendWelcomeEmail()
    {
        // Logic to send a welcome email
    }
}

// Now, the responsibilities are separated into two classes, User for database operations and EmailService for sending emails.
