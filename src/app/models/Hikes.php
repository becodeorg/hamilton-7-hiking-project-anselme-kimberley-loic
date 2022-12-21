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
}