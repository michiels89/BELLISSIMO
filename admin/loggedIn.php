<?php
require_once('TreatmentList.php');
if (!isset($_SESSION)) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
}
// new object treatmentList
$treat = new TreatmentList();

//checking if action isset and deleting treatment
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $treat->deleteTreatmentById($_GET['id']);
        echo "<script>
        window.alert('De behandeling werd verwijderd!');
        window.location.href='loggedIn.php';
        </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
        <!-- IONICONS FONT -->
    <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
</head>
<body>
   <?php require_once('include/menu.php');?>
    <h1>Behandelingen</h1>
       <div><p class='size'><strong>Behandeling toevoegen:</strong>
         <a class="btn btn-primary btnL plus" href="addTreatment.php?action=add"><i class="ion-plus-round"></i></a></p> </div>
          <div class="wrapperTreatments text-center">
          <div class="colH">Id</div>
          <div class="colH">Naam</div>
          <div class="colH">Omschrijving</div>
          <div class="colH">Prijs</div>
          <div class="colH">Duurtijd</div>
          <div class="colH">Aanpassen/</div>
          <div class="colH">Verwijderen</div>
        <?php
            
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
              
            <div><?=$treatment['id'];?></div>
            <div><?=$treatment['naam'];?></div>
            <div><?=$treatment['omschrijving'];?></div>
            <div><?=$treatment['prijs'];?></div>
            <div><?=$duurtijd;?></div>
            <div>
            <a class="btn btn-primary btnL"href="addTreatment.php?action=replace&id=<?=$treatment['id'];?>"><i class="ion-edit"></i></a></div>
            <div><a class="btn btn-primary btnL" href="loggedIn.php?action=delete&id=<?=$treatment['id'];?>"><i class="ion-close-round"></i></a>
            </div>
            
            
        <?php    }
            ?>
        </div>
       

   
    
    
</body>
</html>