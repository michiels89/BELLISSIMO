<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image upload</title>
</head>
<body>
   <div id =" content">
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
    
</body>
</html>