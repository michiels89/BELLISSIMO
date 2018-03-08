<?php
if (strpos($_SERVER['REQUEST_URI'],'loggedIn') > 1 
    || strpos($_SERVER['REQUEST_URI'],'addTreatment') > 1 ) { 

    require_once('../DataBase.php');              
} else { 
    require_once('DataBase.php');
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
    
    public function getTreatmentById($id){
        $db = new Database();
        $sql = "select * from treatments where id = :id";
        $db->executeWithParam ($sql, array(array(':id', $id)));
        $result = $db->single();
        $db = null;
        return $result; 
    }
    public function deleteTreatmentById($id){
        $db = new Database();
        $sql = "delete * from treatments where id = :id";
        $db->executeWithParam($sql, array(array(':id', $id)));
        $db = null;
    } 
    public function upDateTreatment($id, $naam, $omschrijving, $prijs, $duurTijd){
        $db = new Database();
        $sql = "update treatments set naam = :naam, omschrijving = :omschrijving, prijs = :prijs, duurTijd = :duurTijd where id = :id";
        $db->executeWithParam ($sql, array(array(':naam', $naam), array(':omschrijving', $omschrijving), array(':prijs', $prijs), array(':duurTijd', $duurTijd)));
        $db = null;
        
    }
    public function addTreatment($naam, $omschrijving, $prijs,  $duurTijd){
        $db = new Database();
        $sql="insert into treatments (naam, omschrijving, prijs, duurTijd)
        VALUES (:naam, :omschrijving, :prijs,:duurTijd)";
        $db->executeWithParam ($sql, array(array(':naam', $naam), array(':omschrijving', $omschrijving), array(':prijs', $prijs), array(':duurTijd', $duurTijd)));
        $db = null;
    }
}