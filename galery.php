<?php
require_once('admin/ImageList.php');
?>


<!DOCTYPE html>
<html lang="nl-BE">
    <head>
        <meta charset="UTF-8">
        <title>Galerij</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
       <!---------------------------------Image CAROUSEL------------------------------------->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                 <div class="item active">
                      <img src="img/logo.jpg" alt="Bellissimo">
                 </div>
                 <?php 
                 $imageList = new ImageList();
                 $images = $imageList->getAllImages();
        
                 foreach($images as $image){ ?>

                 <div class="item">
                    <img src="files/<?php print($image['image']);?>" alt="<?php print($image['text'])?>">
                    <p ><?php print($image['text'])?></p>
                    </div>
                    
                 <?php } ?>
       
               </div>

               <!-- Left and right controls -->
               <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
               </a>
           </div> 
           <br>

           <?php require_once('include/socialeMedia.php');?>
        </main>
    </body>
</html>