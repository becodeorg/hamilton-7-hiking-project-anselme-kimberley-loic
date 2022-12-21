<?php
class Hikes extends Database
{
    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT hi.hid, hi.name, us.nickname, DATE_FORMAT(hi.dateHike, "%d %M %Y") as dateHike, hi.description FROM hikes hi LEFT JOIN users us ON hi.userId = us.uid LIMIT 40'
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

                'SELECT hi.hid, hi.name, duration, distance, elevationGain, description, DATE_FORMAT(hi.update, "%d %M %Y") as dateUpdate  FROM hikes hi WHERE hid = ?',

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
    public function createHike(string $name, string $distance, string $duration, string $elevationGain, string $description, int $userId) {
        if (!$this->query(
            "INSERT INTO hikes(name, dateHike, distance, duration, elevationGain, description, userId) VALUES (?, ?, ?, ?, ?, ?, ?)",
            [
                $name,
                date("Y-m-d H:i:s"),
                $distance,
                $duration,
                $elevationGain,
                $description,
                $userId
            ]
        )) {
            throw new Exception('Error during creation of the hike.');
        }
    }

    public function removeHike(string $code): void
    {
        try {
            $this->query(
                "DELETE FROM hikes WHERE hid = ?",
                [
                    $code
                ]
            )->fetch();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}