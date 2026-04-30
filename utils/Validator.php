<?php

namespace Utils;

class Validator
{
    public function validateUsername(string $username): string
    {
        if (trim($username) === '') {
            return 'Invalid';
        }

        return 'Valid';
    }

    public function validateEmail(string $email): string
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Valid';
        }

        return 'Invalid';
    }

    public function validatePassword(string $password): string
    {
        if (strlen($password) >= 8) {
            return 'Strong';
        }

        return 'Weak';
    }
}
