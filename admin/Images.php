<?php

class Images{
    
    private $id;
    private $image;
    private $day;
    
    public function __construct($id,$image, $date){
        
        $this->id = $id;
        $this->image = $image;
        $this->day = $date;
    }
    

    
}