<?php
class Hikes extends Database
{
    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT id, name FROM Hikes LIMIT 40'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $code): array|false
    {
        try {
            return $this->query(
                "SELECT id, name, duration, distance, updateGain FROM Hikes WHERE name = ?",
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}