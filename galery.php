<?php
require_once('admin/ImageList.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Galerij</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <?php require_once('include/head.php'); ?>
   <div class="container">

           <?php
        $imageList = new ImageList();
        $images = $imageList->getAllImages();
        $i = 0;
        foreach($images as $image){ ?>
         
        <div class='wrapperImg'>
            <img class='galeryImg'src='files/<?php print($image['image']);?>'>
            <p><?php print($image['text'])?></p>
        </div>
            
        <?php
        }
        
        ?>
    </div>
    
<!--------------------------------------------------------------------------------------->

<!--    <table>-->



        <?php
//        $imageList = new ImageList();
//        $images = $imageList->getAllImages();
//        $i = 0;
//        foreach($images as $image){
//            if($i%2 == 0){
//                echo"<tr>";
//            }
//            echo "<td><img src='files/{$image['image']}' alt='' ></td>";
//            if($i%2 == 2){
//                echo"</tr>";
//            }
//            $i++;
//            
//        }
        
        ?>



        
<!--    </table>-->
    

    
</body>
</html>