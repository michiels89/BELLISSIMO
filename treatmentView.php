<?php 
require_once('admin/TreatmentList.php');
?>
<!DOCTYPE html>
<html lang="nl-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
           <div class="box colH">Behandeling</div>
           <div class="box colH">Omschrijving</div>
           <div class="box colH">Prijs</div>
       
       
        <?php
            $treat = new TreatmentList();
            $treatList = $treat->getAllTreatments();
            foreach($treatList as $treatment){
            ?>    
           <div class="box"><strong><?=$treatment['naam'];?></strong></div>
           <div class="box"><?=$treatment['omschrijving'];?></div>
           <div class="box"><?=$treatment['prijs'];?></div>
    <?php } ?>
        </div>
       
<?php require_once('include/socialeMedia.php');?>
   </section> 
</body>
</html>