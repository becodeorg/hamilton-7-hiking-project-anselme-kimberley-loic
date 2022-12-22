<?php

class Tag extends Database
{
    public function  findTag() : array|false
    {
        try{
            return $this->query('SELECT * FROM `tags`')
                ->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
        }return [];
    }

    public function findPopularTag() : array|false
    {
        try{
            return $this->query('SELECT tags.name, count(tagId) FROM tags
                                            JOIN hikeTag hT on tags.tid = hT.tagId
                                            GROUP BY tagId, tags.name
                                            ORDER BY count(tagId) desc
                                            LIMIT 1')
                ->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
        }return [];
    }

    // Get the tag of an hike from the id of a tag
    public function getTagByHike(): array
    {
        try {
            return $this->query("SELECT * FROM hikeTag WHERE hikeId = ?")
                ->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
        }return[];
    }

    //Add tag in hike's table
    public function addTagHike($hikeId, $tagId)
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
}