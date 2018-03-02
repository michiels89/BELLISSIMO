<?php
require_once('../Database.php');
require_once('ImageList.php');

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
        $msg = "De afbeelding werd succesvol opgeslagen";
    }else{
         $msg = "Er was een probleem bij het uploaden van de afbeelding!";
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
   <!-------------- uploaden images --------->
    <div id =" content">
       <h2><?php echo $msg; ?></h2>
        <form action="uploadImages.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name ="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <textarea name="text" placeholder="Geef een omschrijving van de foto" cols="40" rows="4"></textarea>
            </div>
            <div>
                <input type="submit" name="upload" value="Upload Image">
            </div>
        </form>   
    
   </div>
    
<!-- ----------------   images galery------------------------->
     <div class="container">

           <?php
        $imageList = new ImageList();
        $images = $imageList->getAllImages();
        $i = 0;
        foreach($images as $image){ ?>
         
        <div class='wrapperImg'>
            <img class='galeryImg'src='../files/<?php print($image['image']);?>'>
            <p><?php print($image['text'])?></p>
        </div>
            
        <?php
        }
        
        ?>
    </div>
    
</body>
</html>