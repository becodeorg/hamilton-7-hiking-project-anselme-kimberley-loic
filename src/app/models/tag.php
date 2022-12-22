<?php 
class Tag extends Database
{
    public function  findTag() : array|false
    {
        try{
            return $this->query('SELECT name FROM `tags`')
        ->fetchAll();
        }
    } 
        catch (Exception $e) {
        echo $e->getMessage();
        return [];
    }
    }


?>