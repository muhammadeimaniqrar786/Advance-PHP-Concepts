<?php

class Database
{
    public function query($sql)
    {
        // Implementation of database query
    }
}

class UserService
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getUserById($userId)
    {
        $sql = "SELECT * FROM users WHERE id = $userId";
        return $this->database->query($sql);
    }
}

// Instantiate a UserService object
$userService = new UserService();

// Get user by ID
$userData = $userService->getUserById(123);

// Display user data
print_r($userData);
