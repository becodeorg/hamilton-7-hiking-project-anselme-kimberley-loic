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
            try {
                throw new Exception('Failed registration attempt.');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
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
            try {
                throw new Exception('Failed login attempt : connection error (wrong nickname).');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
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
            try {
                throw new Exception('Failed login attempt : connection error (wrong id).');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
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
            try {
                throw new Exception('Failed update attempt : connexion error while updating the profil.');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}