<?php

class GoModel extends Model
{
    public function GetJ($level = 1)
    {
        $sql = "SELECT * FROM `questions` WHERE `level` = $level";
        $data = $this->makesql($sql);
        return $this->arr($data);
    }
}