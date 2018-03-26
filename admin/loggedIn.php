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
<html lang="nl-BE">
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

    <h1>Behandelingen:</h1>
    <main>
           <div><p class='size'><strong>Behandeling toevoegen:</strong>
         <a class="btn btn-primary btnL plus" href="addTreatment.php?action=add"><i class="ion-plus-round"></i></a></p> </div><br>
         
          <div class="wrapperTreatments text-center">
          <div class="colH col1">Id</div>
          <div class="colH col2">Naam</div>
          <div class="colH col3">Omschrijving</div>
          <div class="colH col4">Prijs</div>
          <div class="colH col6">Aanpassen/</div>
          <div class="colH col6">Verwijderen</div>
        <?php
            $treatList = $treat->getAllTreatments();
            foreach($treatList as $treatment){
        ?> 
              
            <div class="col1"><?=$treatment['id'];?></div>
            <div class="col2"><?=$treatment['naam'];?></div>
            <div class="col3"><?=$treatment['omschrijving'];?></div>
            <div class="col4"><?=$treatment['prijs'];?></div>
            <div class="col6">
            <a class="btn btn-primary btnL"href="addTreatment.php?action=replace&id=<?=$treatment['id'];?>"><i class="ion-edit"></i></a></div>
            <div class="col6"><a class="btn btn-primary btnL" href="loggedIn.php?action=delete&id=<?=$treatment['id'];?>"><i class="ion-close-round"></i></a>
            </div>
            
            
        <?php    }
            ?>
        </div>
       

  </main> 
    
    
</body>
</html>