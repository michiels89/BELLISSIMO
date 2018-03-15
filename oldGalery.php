<?php
require_once('admin/ImageList.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Galerij</title>
        <!-- IONICONS FONT -->
        <link rel="stylesheet" href="vendors/ionicons/css/ionicons.min.css">
    
        <!--    stylesheets-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!--    script carousel-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
           <br>

           <?php require_once('include/socialeMedia.php');?>
        </main>
    </body>
</html>