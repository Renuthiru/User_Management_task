<?php

// Import classes from namespace
use Utils\User;
use Utils\Validator as UserValidator;

// Load required class files (critical files)
// require_once ensures the file is loaded only once and stops execution if missing
require_once __DIR__ . '/utils/User.php';
require_once __DIR__ . '/utils/Validator.php';

// Load user data from users.php
// This file returns an array which is stored in $users
$users = require_once __DIR__ . '/data/users.php';

// Load helper functions (optional file)
// include_once will not stop execution if file is missing
include_once __DIR__ . '/utils/helpers.php';


// Create Validator object
$validator = new UserValidator();

// Loop through each user in the array
foreach ($users as $userData) {

    // Create User object using constructor
    $user = new User(
        $userData['username'],
        $userData['email'],
        $userData['password']
    );

    // Print user name
    printLine('User', $user->username);

    // Validate and print username
    printLine('Username', $validator->validateUsername($user->username));

     // Validate and print email
    printLine('Email', $validator->validateEmail($user->email));

    // Validate and print password
    printLine('Password', $validator->validatePassword($user->password));

    // Print separator line
    printSeparator();
}

// Main file: loads data, creates objects, validates users, and prints output
