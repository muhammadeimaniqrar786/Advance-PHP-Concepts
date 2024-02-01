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

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getUserById($userId)
    {
        $sql = "SELECT * FROM users WHERE id = $userId";
        return $this->database->query($sql);
    }
}

// Instantiate a Database object
$database = new Database();

// Instantiate a UserService object with dependency injection
$userService = new UserService($database);

// Get user by ID
$userData = $userService->getUserById(123);

// Display user data
print_r($userData);
