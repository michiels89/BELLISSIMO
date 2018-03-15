<?php

    if(!isset($_SESSION)) {
        session_start();
    }

?>

<!-- Header menu -->

<div class="banner">
    <div class="logo"><a href="../admin/loggedIn.php"><img src="../img/logo.jpg"></a></div>
    <div class="header text-center">

         <div><a class='btn btn-primary' href='newUser.php'>Nieuwe gebruiker</a></div>
         <div><a class='btn btn-primary' href='uploadImages.php'>Foto's toevoegen</a></div>
         <div><a class='btn btn-primary' href='UserDelete.php'>User verwijderen</a></div>

         <div><a class='btn btn-primary' href='passwordChange.php'>Wijzig wachtwoord</a></div>

         <div><a class='btn btn-primary' href='logout.php'>Logout</a></div>
     </div>
</div>
