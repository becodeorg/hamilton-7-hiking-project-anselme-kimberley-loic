<?php 
class Tag extends Database
{
    public function  allTag() : array|false
    {
        try{
            return $this->query('SELECT name FROM `tags`')
        ->fetchall();
        }
    }
}

?>