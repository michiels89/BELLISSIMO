<?php
require_once('ImageList.php');
require_once('promoList.php');

if (!isset($_SESSION)) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
}
//new object promoList
$promoList = new promoList();


$msg = "";
// if vervang promo is clicked
if(isset($_POST['replace'])){
    // the path to store the uploaded image
    $target = "../files/".basename($_FILES['image']['name']);

    // get al the submitted data from the form
    $image = $_FILES['image']['name'];
    $text = $_POST["omschrijving"];
    
    //update promo
    $promoList->replacePromo($image,$text);

    // move the uploade images into the folder
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $file = $_POST["previousImg"];
        $targetDelete = "../files/".$file;
        unlink($targetDelete);
        $msg = "De promo werd succesvol aangepast!";
    }else{
         $msg = "Er was een probleem bij het uploaden van de afbeelding! Probeer het opnieuw.";
    }
    
}
$msg1="";
//show promo or not
if(isset($_GET['action']) && $_GET['action'] == 'show'){
    
    if(isset($_POST['yes']) && isset($_POST['no'])){
        
        $msg1= "kies ja OF nee";
        
    }elseif(isset($_POST['yes'])){
        $promoList->toShow(1);
        $msg1= "De promo wordt weergegeven";
        
    }elseif(isset($_POST['no'])){
        $promoList->toShow(0);
        $msg1= "De promo wordt niet meer weergegeven";
    }
    
}

// if upload button is clicked
$msg2 = "";
if(isset($_POST['upload'])){
    // the path to store the uploaded image
    $target = "../files/".basename($_FILES['image']['name']);
    // connect to database
    $db = new DataBase;
    // get al the submitted data from the form
    $image = $_FILES['image']['name'];
    $text = $_POST["text"];
    
    $sql = "insert into images(image, text) values(:image,:text )";
    $db->executeWithParam ($sql, array(array(':image', $image), array(':text', $text)));
    
    // move the uploade images into the folder
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg2 = "De afbeelding werd succesvol opgeslagen!";
    }else{
         $msg2 = "Er was een probleem bij het uploaden van de afbeelding!";
    }
    
}
//new object imageList

$imageList = new ImageList();

// delet image
if(isset($_GET['action']) && $_GET['action'] == "delete"){
    
    $imageList->deleteImage($_GET['id']);
    $file = $_GET["image"];
        $targetDelete = "../files/".$file;
        unlink($targetDelete);
        echo("<script>
    window.alert('Item is verwijderd.');
    </script>");
}
?>



<!DOCTYPE html>
<html lang="nl-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Image upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
        <!-- IONICONS FONT -->
    <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.min.css">
</head>
<body>
  <?php require_once('include/menu.php');?>
  <br><br><br><br>
     <!-------------- REPLACE PROMO --------->
     <?php $promo = $promoList->getPromo(); ?>
   <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-4 text-center" id =" content">
        <h1>Promo aanpassen</h1>   
        <h3><?php echo $msg; ?></h3><br><br>
        <form action="uploadImages.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name ="size" value="1000000">
            <input type="hidden" name="previousImg" value="<?php print($promo['foto']);?>">
             <div class="form-group bestand">
                <input type="file" name="image">
             </div>
            <div class="form-group">
                <textarea name="omschrijving" placeholder="Geef wat uitleg voor de promo" cols="40" rows="4"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="replace" value="Vervang promo">
            </div>
        </form> 
         </div>
            <div class="col-4 text-center">
                <form action="uploadImages.php?action=show" method="post">
                    <h1>Promo tonen?</h1>
                    <h3><?php echo $msg1; ?></h3><br><br>
                    <label for="yes">ja</label>
                    <input type="checkbox" name="yes" id="yes">
                    <label for="no">nee</label>
                    <input type="checkbox" name="no" id="no">
                    <input type="submit" value="Aanpassen">
                </form> 
            </div>
        </div>
    </div> 
     <!-- PROMO-->
    <div class="container">
        <div class='wrapperImg'>
            <img class='galeryImg'src='../files/<?php print($promo['foto']);?>'>
            <p><?php print($promo['omschrijving'])?></p>
        </div>

    </div>
    
   <!-------------- uploaden images --------->
   <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-4 text-center" id =" content">
       <h1>Foto's toevoegen/verwijderen</h1>     
       <h3><?php echo $msg2; ?></h3><br><br>
        <form action="uploadImages.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name ="size" value="1000000">
             <div class="form-group bestand">
                <input type="file" name="image">
             </div>
            <div class="form-group">
                <textarea name="text" placeholder="Geef een omschrijving van de foto" cols="40" rows="4"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="upload" value="Upload Image">
            </div>
        </form>   
    
   
       </div>
            <div class="col"></div>
        </div>
    </div> 
<!-- ----------------   image galery------------------------->
     <div class="container">

           <?php
        
        $images = $imageList->getAllImages();
       
        foreach($images as $image){ ?>
         
        <div class='wrapperImg'>
            <img class='galeryImg'src='../files/<?php print($image['image']);?>'>
            <p><?php print($image['text'])?></p>
            <div><a class="btn btn-primary btnL" href="uploadImages.php?action=delete&id=<?=$image['id'];?>&image=<?=$image['image'];?>"><i class="ion-close-round"></i></a>
            </div>
        </div>
            
        <?php
        }
        
        ?>
    </div>
    
</body>
</html>