<?php 
require_once('admin/TreatmentList.php');

?>
<!DOCTYPE html>
<html lang="nl-BE">
<head>
    <meta charset="UTF-8">
    <!--    For search engines-->
    <meta name="robots" content="index, follow">
    <meta name="description" content="Bellissimo:Natural Beauty! Nagelstudio te Averbode.U kan hier terecht voor Manicure, Gellak: full color of french en verwijderen van gellak.">
<!--   View -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Behandelingen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--    google font-->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>

    <?php require_once('include/head.php'); ?>
    <section>
        <div class="wrapperTreatment text-center">
          <div class="row">
           <div class="box colH col1">Behandeling</div>
           <div class="box colH col2">Omschrijving</div>
           <div class="box colH col3">Prijs</div></div>
       
       
        <?php
            $treat = new TreatmentList();
            $treatList = $treat->getAllTreatments();
            foreach($treatList as $treatment){
            ?>
          <div class="row">    
           <div class="box col1"><strong><?=$treatment['naam'];?></strong></div>
           <div class="box col2"><?=$treatment['omschrijving'];?></div>
           <div class="box col3">€ <?=$treatment['prijs'];?></div></div>
    <?php } ?>
        </div>
       
<?php require_once('include/socialeMedia.php');?>
   </section> 
</body>
</html>