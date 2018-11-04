<?php

class GoModel extends Model
{
    public function GetJ($level = 1)
    {
        $level = intval($level);
        $sql = "SELECT * FROM `questions` WHERE `level` = $level";
        $data = $this->makesql($sql);
        return $this->arr($data);
    }

    public function GetRandom()
    {
        $sql  = 'SELECT * FROM `questions` ORDER BY RAND() LIMIT 1';
        $data = $this->makesql($sql);
        return $this->arr($data);
    }

    public function GetRandomLevel($level = 1)
    {
        $level = intval($level);
        $sql  = 'SELECT * FROM `questions` WHERE `level` = $level ORDER BY RAND() LIMIT 1';
        $data = $this->makesql($sql);
        return $this->arr($data); 
    }
}