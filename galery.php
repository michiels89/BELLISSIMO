<?php
require_once('admin/ImageList.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Galerij</title>
</head>
<body>
    <table>
        <?php
        $imageList = new ImageList();
        $images = $imageList->getAllImages();
        $i = 0;
        foreach($images as $image){
            if($i%3 == 0){
                echo"<tr>";
            }
            echo "<td><img src='files/uploads/{$image['image']}' alt='' ></td>";
            if($i%3 == 2){
                echo"</tr>";
            }
            $i++;
            
        }
        
        ?>
        
    </table>
    
    
</body>
</html>