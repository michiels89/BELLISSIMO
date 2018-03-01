<?php
require_once '../DataBase.php';

class ImageList{
    
    public function getAllImages(){
        
        $db = new DataBase();
        $sql = "Select * from images";
        $db->executeWithoutParam($sql);
        $resultSet = $db->resultset();
        $db = null;
        $imageList = [];
        foreach($resultSet as $image){
            array_push($imageList, $image);
        }
        return $imageList;
       
    }
    
    public function deleteNodes($id){
        $db = new Database();
        $sql = "DELETE FROM images WHERE id = :id";
        $db->executeWithParam($sql, array(array(':id', $id)));
        $db = null;
    }
    
    public function addImage($id,$image, $date){
        $db = new Database;
        $sql = "insert into images(id,image,date) values (:id,:image,:date)";
        $db->executeWithParam($sql,
              array(array(':id', $id), 
              array(':image', $image), 
              array(':date', $date)));
        $db=null;
        
    }
    
}

