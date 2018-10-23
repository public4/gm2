<?php
class SettingsModel extends Model
{

   public function addTestData()
   {
    $level = rand(1, 10);
    $question = $this->GUID();    
    $sql = "INSERT INTO `questions` VALUES (null, '$level', '$question')";
    $this->makesql($sql);
    return true;
   }

}