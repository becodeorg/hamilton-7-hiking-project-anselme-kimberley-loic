<?php
class Hikes extends Database
{
    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT hid, name FROM hikes LIMIT 40'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    // find the 5 longest (by distance) hikes
    public function findLongest(): array|false
    {
        try {
            return $this->query(
                'SELECT hid, name, distance FROM `hikes` order by distance DESC LIMIT 5'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    // find the last hike added (with the id)
    public function findLast(): array|false
    {
        try {
            return $this->query(
                'SELECT hid, name, distance FROM `hikes` order by hid DESC LIMIT 1'
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $code): array|false
    {
        try {
            return $this->query(
                "SELECT name, duration, distance, elevationGain FROM hikes WHERE name = ?",
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    // add hike
    public function addHike(string $name, int $distance,int $duration, int $elevationGain, string $description ) {
        if (!$this->query(
            "INSERT INTO hikes(name, distance, duration, elevationGain, description) VALUES (?, ?, ?, ?, ?)",
            [
                $name,
                $distance,
                $duration,
                $elevationGain,
                $description
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }
}