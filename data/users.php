<?php

// This code returns an array.
// It stores details of each user (username, email, password).

// When this file is loaded using require_once,
// the array is returned to index.php.

// The returned data is stored in a variable (like $users)
// and then used in the program for further processing. 

return [
    [
        'username' => 'Rahul',
        'email'    => 'rahul@gmail.com',
        'password' => 'Pass1234'
    ],
    [
        'username' => 'Maria',
        'email'    => 'maria@gmail.com',
        'password' => 'maria2024'
    ],
    [
        'username' => 'Sameera',
        'email'    => 'sameera@gmail.com',
        'password' => 'weak'
    ],
];
