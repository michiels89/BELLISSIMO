<?php 
require_once('admin/TreatmentList.php');
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
       
    <div class="wrapperTreatment text-center">
       <div class="box colH">Behandeling</div>
       <div class="box colH">Omschrijving</div>
       <div class="box colH">Prijs</div>
       <div class="box colH">Duurtijd</div>
        <?php
            $treat = new TreatmentList();
            $treatList = $treat->getAllTreatments();
            foreach($treatList as $treatment){
                $duurtijd = $treatment['duurTijd'] ."m";
            ?>    
           <div class="box colH"><?=$treatment['naam'];?></div>
           <div class="box"><?=$treatment['omschrijving'];?></div>
           <div class="box"><?=$treatment['prijs'];?></div>
           <div class="box"><?=$duurtijd?></div>
            
            
            
            
        <?php
            } 
           
            ?>
    </div>
       
<?php
    require_once('include/backHome.php');
    ?>
    
</body>
</html>