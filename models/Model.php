<?php

class Model {
    protected $db = null;

    public function __construct()
    {
        $this->db = dbconnect::connect();
    }

    public function makesql($sql)
    {
        $mysqli = $this->db->query($sql);
        return $mysqli;
    }

    public function arr($mysql_object)
    {
        while ($row = $mysql_object->fetch_assoc())
        {
            $data[] = $row;
        }
        return $data;
    }

    
    public function GUID()
    {
      if (function_exists('com_create_guid') === true)
      {
          return trim(com_create_guid(), '{}');
      }
      return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function telegram($message)
    {
        //file_get_contents('https://tgbot-one.000webhostapp.com/?send='.urlencode($message));
    }

}

?>