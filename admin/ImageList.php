<?php
 
if (strpos($_SERVER['REQUEST_URI'],'galery') > 1 || strpos($_SERVER['REQUEST_URI'],'oldGalery') > 1 ) { 
    require_once('DataBase.php');              
} else { 
    require_once('../DataBase.php');
}
            



class ImageList{
    
    public function getAllImages(){
        
        $db = new DataBase();
        $sql = "Select * from images order by id desc";
        $db->executeWithoutParam($sql);
        $resultSet = $db->resultset();
        $db = null;
        $imageList = [];
        foreach($resultSet as $image){
            array_push($imageList, $image);
        }
        return $imageList;
        
       
    }
    
    public function deleteImage($id){
        $db = new Database();
        $sql = "DELETE FROM images WHERE id = :id";
        $db->executeWithParam($sql, array(array(':id', $id)));
        $db = null;
    }

}

