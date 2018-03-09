
<?php
require_once('TreatmentList.php');
if (!isset($_SESSION)) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
}

//
if (isset($_SESSION['message'])) {
     echo "<script>
        window.alert('Inhoud mag niet leeg zijn');
        </script>";
    unset($_SESSION['message']);
}

$errors = [];
$treatL = new TreatmentList();

// check if fields aren't empty ADD

if(isset($_POST['add'])){
    if (empty($_POST['naam'])) {
    $errors[] = "Vul de naam van de behandeling in!";
    } 
    if (empty($_POST['omschrijving'])) {
    $errors[] = "Vul de omschrijving in!";
    } 
    if (empty($_POST['prijs'])) {
    $errors[] = "Vul de prijs in!";
    } 
    if (empty($_POST['duurtijd'])) {
    $errors[] = "Duidt de duurtijd aan in minuten!";
    } 
    
    if(count($errors) == 0){
        $treatL->addTreatment($_POST['naam'],$_POST['omschrijving'],$_POST['prijs'],$_POST['duurtijd']);
        echo "<script>
        window.alert('Opgeslagen');
        window.location.href='loggedIn.php';
        </script>";

    } elseif(count($errors) == 4) {
        $_SESSION['message'] = 'Inhoud mag niet leeg zijn';
        header ('Location: addTreatment.php?action=add&id=' . $_POST['id'] . '');
    }
 
        
}
// replace treatment
if(isset($_POST['replace'])){
    
    $treatL->updateTreatment($_POST['id'],$_POST['naam'],$_POST['omschrijving'],$_POST['prijs'],$_POST['duurtijd']);
    echo "<script>
        window.alert('De behandeling werd aangepast!');
        window.location.href='loggedIn.php';
        </script>";
}


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Behandelingen toevoegen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
    <script type="text/javascript">
    function sliderChange(val){
        
        document.getElementById('sliderStatus').innerHTML = val + ' minuten';
    }
    </script>
</head>
<body>

   <?php require_once('include/menu.php');?>
    
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-4 text-center">
               
               <?php 
                if ($_GET['action'] == 'add') {
            ?><h2 class="text-center">Behandelingen toevoegen</h2>
                <form action="addTreatment.php?action=add" method="post">
                    <div class="form-group">
                        <label for="naamBehandeling">Naam behandeling:</label>
                        <input type="text" class="form-control" id="naamBehandeling"
                               placeholder="Naam" name="naam">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">Omschrijving: </label>
                        <textarea class="form-control" rows="4" id="omschrijving"  placeholder="Omschrijving"
                               name="omschrijving"></textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="prijsBehandeling">Prijs behandeling: </label>
                        <input type="float" class="form-control" id="prijsBehandeling"
                               placeholder="Prijs"
                               name="prijs">
                    </div>
                      <div class="form-group"> 
                        <label for="duurtijdBehandeling">Duur behandeling minuten: </label>
                        <input type="range" max="180" step="5" class="form-control" id="duurtijdBehandeling"
                               name="duurtijd" list="tickmark" onchange="sliderChange(this.value)" value="60">
                         <span id='sliderStatus'>60 minuten</span>   

                     
                    </div>
                    <button type="submit" class="btn btn-primary" name="add">Voeg toe</button>
                    <a href="loggedIn.php" class="btn btn-primary">Annuleer</a>
                    <p><?php echo implode("<br><br>", $errors);?></p>
                </form>
                 
                <?php } else if ($_GET['action'] == "replace") {
                $treatment = $treatL->getTreatmentByID($_GET["id"]);
                ?>

               
                <h2 class="text-center">Behandelingen aanpassen</h2>
                             <form action="addTreatment.php" method="post">
                    <div class="form-group">
                        <label for="naamBehandeling">Naam behandeling:</label>
                        <input type="text" class="form-control" id="naamBehandeling" value="<?=$treatment['naam'];?>" name="naam">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">Omschrijving: </label>
                        <textarea class="form-control" rows="4" id="omschrijving" name="omschrijving"
                        ><?=$treatment['omschrijving'];?></textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="prijsBehandeling">Prijs behandeling: </label>
                        <input type="float" class="form-control" id="prijsBehandeling"
                               value="<?=$treatment['prijs'];?>"
                               name="prijs">
                    </div>


                    <div class="form-group">
                        <label for="duurtijdBehandeling">Duur behandeling minuten: </label>
                        <input type="range" max="180" step="5" class="form-control" id="duurtijdBehandeling"
                               name="duurtijd" list="tickmark" onchange="sliderChange(this.value)" value="<?=$treatment['duurTijd'];?>">
                         <span id='sliderStatus'><?=$treatment['duurTijd'];?> minuten</span>   

                     <input type="hidden" name="id" value="<?php echo $_GET['id']?>">     
                      </div>
                    <button type="submit" class="btn btn-primary" name="replace">Vervang</button>
                    <a href="loggedIn.php" class="btn btn-primary">Annuleer</a>
                   </form>
             
              <?php }?>  

            </div>
            <div class="col"></div>
        </div>
    </div>

</body>
</html>