
<?php
if (!isset($_SESSION)) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
}

//require_once('TreatmentList.php');
//$treatL = new TreatmentList();
//
//
//if(isset($_GET['action']) && $_GET['action'] == 'add'){
//    
//    
//}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Behandelingen toevoegen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
   <?php require_once('include/menu.php');?>
    <h2 class="text-center">Behandelingen toevoegen</h2>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-4 text-center">
               
               <?php 
                if ($_GET['action'] == 'add') {
            ?>
                <form action="addTreatment.php?action=add" method="post">
                    <div class="form-group">
                        <label for="naamBehandeling">Naam behandeling:</label>
                        <input type="text" class="form-control" id="naamBehandeling"
                               placeholder="Naam" name="naam">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">Omschrijving: </label>
                        <textarea class="form-control" rows="3" id="omschrijving"  placeholder="Omschrijving"
                               name="omschrijving"></textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="prijsBehandeling">Prijs behandeling: </label>
                        <input type="float" class="form-control" id="prijsBehandeling"
                               placeholder="Prijs"
                               name="prijs">
                    </div>
                    <div class="form-group">
                        <label for="duurtijdBehandeling">Duur behandeling: </label>
                        <input type="range" max="3" step="0.25" class="form-control" id="duurtijdBehandeling" name="duurtijd" list="tickmarks" value= ''>
                               <datalist id="tickmarks">
                                  <option value="0" label='0u'>
                                  <option value="0.25">
                                  <option value="0.5">
                                  <option value="0.75">
                                  
                                  <option value="1" label="1u">
                                  <option value="1.25">
                                  <option value="1.50">
                                  <option value="1.75">
                                  
                                  <option value="2" label="2u">
                                  <option value="2.25">
                                  <option value="2.50">
                                  <option value="2.75">
                                  
                                  <option value="3" label="3u">
                                </datalist>
                                <output for="duurtijdBehandeling"></output>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add">Voeg toe</button>
                    <a href="loggedIn.php" class="btn btn-primary">Annuleer</a>
                </form>
                <?php } else if ($_GET['action'] == 'add') {?>
                
                             <form action="addTreatment.php?action=add" method="post">
                    <div class="form-group">
                        <label for="naamBehandeling">Naam behandeling:</label>
                        <input type="text" class="form-control" id="naamBehandeling"
                               placeholder="Naam" name="naam">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">Omschrijving: </label>
                        <textarea class="form-control" rows="3" id="omschrijving"  placeholder="Omschrijving"
                               name="omschrijving"></textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="prijsBehandeling">Prijs behandeling: </label>
                        <input type="float" class="form-control" id="prijsBehandeling"
                               placeholder="Prijs"
                               name="prijs">
                    </div>
                    <div class="form-group">
                        <label for="duurtijdBehandeling">Duur behandeling: </label>
                        <input type="range" max="3" step="0.25" class="form-control" id="duurtijdBehandeling" name="duurtijd" list="tickmarks" value= ''>
                               <datalist id="tickmarks">
                                  <option value="0" label='0u'>
                                  <option value="0.25">
                                  <option value="0.5">
                                  <option value="0.75">
                                  
                                  <option value="1" label="1u">
                                  <option value="1.25">
                                  <option value="1.50">
                                  <option value="1.75">
                                  
                                  <option value="2" label="2u">
                                  <option value="2.25">
                                  <option value="2.50">
                                  <option value="2.75">
                                  
                                  <option value="3" label="3u">
                                </datalist>
                                <output for="duurtijdBehandeling"></output>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add">Vervang</button>
                    <a href="loggedIn.php" class="btn btn-primary">Annuleer</a>
                </form>
             
              <?php }?>  
<!--
                <label>Select your preferred code editor:</label>
<input type="text" id="txt_ide" list="ide" />
<datalist id="ide">
    <option value="Brackets" />
    <option value="Coda" />
    <option value="Dreamweaver" />
    <option value="Espresso" />
    <option value="jEdit" />
    <option value="Komodo Edit" />
    <option value="Notepad++" />
    <option value="Sublime Text 2" />
    <option value="Taco HTML Edit" />
    <option value="Textmate" />
    <option value="Text Pad" />
    <option value="TextWrangler" />
    <option value="Visual Studio" />
    <option value="VIM" />
    <option value="XCode" />
</datalist>
-->


<!--
                <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
-->
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>