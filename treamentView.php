<?php 
require_once('TreatmentList.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Behandelingen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once('include/head.php'); ?>
    <h1>Behandelingen</h1>
       
     <div>
        <?php
            $treat = new TreatmentList();
            $treatList = $treat->getAllTreatments();
            foreach($treatList as $treatment){
            ?>    
            <div><?=$treatment['id'];?></div>
            <div><?=$treatment['naam'];?></div>
            <div><?=$treatment['omschrijving'];?></div>
            <div><?=$treatment['prijs'];?></div>
            <div><?=$treatment['duurTijd'];?></div>
        <?php    }
            ?>
        </div>
       

    
</body>
</html>