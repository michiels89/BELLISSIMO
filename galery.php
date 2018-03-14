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
    <!--    google font-->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>

<body>
   <?php require_once('include/head.php'); ?>
   <main>
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
    
   <?php
    require_once('include/socialeMedia');
    ?>
    
</main>
    
</body>
</html>