<?php
class Hikes extends Database
{
    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT hi.hid, hi.name, hi.distance, us.nickname, DATE_FORMAT(hi.dateHike, "%d %M %Y") as dateHike, hi.description FROM hikes hi LEFT JOIN users us ON hi.userId = us.uid LIMIT 40'
            )->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
        }return [];
    }

    // find the 5 longest (by distance) hikes
    public function findLongest(): array|false
    {
        try {
            return $this->query(
                'SELECT hid, name, distance, description FROM `hikes` order by distance DESC LIMIT 4'
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
                'SELECT hid, name, distance, description FROM `hikes` order by hid DESC LIMIT 1'
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

                'SELECT hi.hid, hi.name, duration, distance, elevationGain, description, DATE_FORMAT(hi.update, "%d %M %Y") as dateUpdate, userId  FROM hikes hi WHERE hid = ?',

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

    public function createHike(string $name, string $distance, string $duration, string $elevationGain, string $description, int $userId)
    {
        try {
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
        } catch (Exception $e){
            echo $e->getMessage();
        }
        $hikeId = $this->query("SELECT hid FROM hikes WHERE name = ?", [$name])->fetch();
        $tagId = $this->query("SELECT tid FROM tags WHERE name = ?", [$tagName])->fetch();
        var_dump($hikeId);
        var_dump($tagId);
        $this->query("INSERT INTO hikeTag(hikeId, tagId) VALUES (?,?)", [

                $hikeId["hid"],
                $tagId["tid"]
            ]
        );
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
            echo $e->getMessage();
        }
    }

    public function findMyHikes(int $uid)
    {
        try {
            return $this->query(
                'SELECT hi.hid, hi.name, duration, distance, elevationGain, description, DATE_FORMAT(hi.update, "%d %M %Y") as dateUpdate  FROM hikes hi WHERE userId = ?',
                [
                    $uid
                ]
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
    public function updatingHike(string $name, string $distance, string $duration, string $elevationGain, string $description, string $update, string $hid): void
    {
        if (!$this->query(
            "Update hikes hi set name = ? ,distance = ?, duration = ?, elevationGain = ?, description = ?, hi.update = ? WHERE hid = ?",
            [
                $name,
                $distance,
                $duration,
                $elevationGain,
                $description,
                $update,
                $hid
            ]
        )) {
            throw new Exception('Error during the update of the hike.');
        }
    }

    public function addTagHike($hikeId, $tagId): void
    {
        if (!$this->query(
            "INSERT INTO hikeTag(hikeId, tagId) VALUES (?,?)",
            [
                $hikeId,
                $tagId,
            ]
        )) {
            throw new Exception('Error during the add of an hike');
        }
    }

    public function getIdHike(string $name): int|false
    {
        try {
            return $this->query(

                'SELECT hid FROM hikes WHERE name = ?',
                [
                    $name
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }


}