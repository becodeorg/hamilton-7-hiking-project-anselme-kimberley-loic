<?php

class Auth extends Database
{
    public function create(string $nickname, string $email, string $password, string $firstname, string $lastname): void
    {
        if (!$this->query(
            "INSERT INTO users(nickname, firstname, lastname, email, password) VALUES (?, ?, ?, ?, ?)",
            [
                $nickname,
                $firstname,
                $lastname,
                $email,
                $password
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }

    public function find(string $nickname): array
    {
        if (!$user = $this->query(
            "SELECT * FROM users WHERE username = ?",
            [
                $nickname,
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }

        return $user;
    }
}