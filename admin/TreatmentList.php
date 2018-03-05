<?php
if (strpos($_SERVER['REQUEST_URI'],'galery') > 1) { 
    require_once('DataBase.php');              
} else { 
    require_once('../DataBase.php');
}
   

class TreatmentList{
    
    public function getAllTreatments(){
        $db = new Database();
        $sql = "select * from treatments";
        $db->executeWithoutParam($sql);
        $resultSet = $db-> resultSet();
        $db = null;
        return $resultSet;
    }
    
}