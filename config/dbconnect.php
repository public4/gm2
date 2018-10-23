<?php

class dbconnect
{
    CONST dbuser = 'root';
    CONST dbpass = '';
    CONST dbhost = 'localhost';
    CONST dbname = 'game';

    public static function connect()
    {
        $dbuser = self::dbuser;
        $dbpass = self::dbpass;
        $dbhost = self::dbhost;
        $dbname = self::dbname;
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass);
        $mysqli -> select_db($dbname);
        $mysqli -> query ("SET names utf8");
        return $mysqli;
    }
}