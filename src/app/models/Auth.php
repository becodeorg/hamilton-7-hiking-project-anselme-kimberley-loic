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
            "SELECT * FROM users WHERE nickname = ?",
            [
                $nickname,
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }
        return $user;
    }

    public function findId(int $uid): array
    {
        if (!$user = $this->query(
            "SELECT * FROM users WHERE uid = ?",
            [
                $uid,
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }
        return $user;
    }

    public function update(int $uid, string $email, string $nickname, string $firstname, string $lastname, string $password): void
    {
        if (!$this->query(
            "UPDATE `users` SET email = ? , nickname = ? , firstName = ? , lastName = ?, password = ? WHERE uid = ?",
            [
                $email,
                $nickname,
                $firstname,
                $lastname,
                $password,
                $uid
            ]
        )) {
            throw new Exception('Error during updating profil.');
        }
    }
}