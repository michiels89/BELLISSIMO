<?php
require_once('../Database.php');
require_once('ImageList.php');

if (!isset($_SESSION)) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
}


// if upload button is pressed
$msg = "";
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
        $msg = "De afbeelding werd succesvol opgeslagen!";
    }else{
         $msg = "Er was een probleem bij het uploaden van de afbeelding!";
    }
    
}
//new object imageList

$imageList = new ImageList();

// delet image
if(isset($_GET['action']) && $_GET['action'] == "delete"){
    
    $imageList->deleteImage($_GET['id']);
        echo("<script>
    window.alert('Item is verwijderd.');
    </script>");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Image upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
      
       <!-- IONICONS FONT -->
    <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
</head>
<body>
  <?php require_once('include/menu.php');?>
  <br><br><br><br>
   <!-------------- uploaden images --------->
   <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-4 text-center" id =" content">
            
       <h2><?php echo $msg; ?></h2><br><br>
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
            <div><a class="btn btn-primary btnL" href="uploadImages.php?action=delete&id=<?=$image['id'];?>"><i class="ion-close-round"></i></a>
            </div>
        </div>
            
        <?php
        }
        
        ?>
    </div>
    
</body>
</html>