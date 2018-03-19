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
    <!--    google font-->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
    <?php require_once('include/head.php'); ?>
    <main>
<!--    <h1 class="text-center">Behandelingen</h1><br><br>-->
      
       
    <div class="wrapperTreatment text-center">
       <div class="box colH">Behandeling</div>
       <div class="box colH">Omschrijving</div>
       <div class="box colH">Prijs</div>
       
       
        <?php
            $treat = new TreatmentList();
            $treatList = $treat->getAllTreatments();
            foreach($treatList as $treatment){
                // changing min in h&m
                $uur = floor($treatment['duurTijd']/60);
                $min = $treatment['duurTijd']%60;
                if($uur == 0){
                    $duurtijd = $min . "min";
                }elseif($min == 0){
                    $duurtijd = $uur . "u";
                }else{
                    $duurtijd = $uur . "u" . $min ."min";
                }
            ?>    
           <div class="box"><strong><?=$treatment['naam'];?></strong></div>
           <div class="box"><?=$treatment['omschrijving'];?></div>
           <div class="box"><?=$treatment['prijs'];?></div>
    <?php } ?>
    </div>
       
<?php
    
    require_once('include/socialeMedia.php');
    ?>
   </main> 
</body>
</html>