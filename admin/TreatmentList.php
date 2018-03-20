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
        $treatmentList= [];
        foreach($resultSet as $treatment){
            array_push($treatmentList, $treatment);
        }
        return $treatmentList;
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
        $sql = "delete from treatments where id = :id";
        $db->executeWithParam($sql, array(array(':id', $id)));
        $db = null;
    } 
    public function updateTreatment($id, $naam, $omschrijving, $prijs){
        $db = new Database();
        $sql = "update treatments set naam = :naam, omschrijving = :omschrijving, prijs = :prijs where id = :id";
        $db->executeWithParam ($sql, array(array(':id', $id), array(':naam', $naam), array(':omschrijving', $omschrijving), array(':prijs', $prijs)));
        $db = null;
        
    }
    public function addTreatment($naam, $omschrijving, $prijs){
        $db = new Database();
        $sql="insert into treatments (naam, omschrijving, prijs)
        VALUES (:naam, :omschrijving, :prijs)";
        $db->executeWithParam ($sql, array(array(':naam', $naam), array(':omschrijving', $omschrijving), array(':prijs', $prijs)));
        $db = null;
    }
}