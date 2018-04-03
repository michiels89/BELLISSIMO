<?php
if (strpos($_SERVER['REQUEST_URI'],'index') > 1) { 
    require_once('DataBase.php');              
} else { 
    require_once('../DataBase.php');
}          



class promoList{
    
    public function getPromo(){
        
        $db = new DataBase();
        $sql = "Select * from promos WHERE id = :id";
        $db->executeWithParam($sql, array(array(':id', 1)));
        $promo=$db->single();
        return $promo;
        $db=null;
    }
    
    
    public function replacePromo($photo, $omschrijving){
        $db = new Database();
        $sql = "update promos set foto = :photo, omschrijving = :omschrijving where id = 1";
        $db->executeWithParam ($sql, array(array(':photo', $photo), array(':omschrijving', $omschrijving)));
        $db = null;
        
    }
}
