<?php

class Auth extends Database
{
    public function create(string $nickname, string $email, string $password): void
    {
        if (!$this->query(
            "INSERT INTO users(nickname, email, password) VALUES (?, ?, ?)",
            [
                $nickname,
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