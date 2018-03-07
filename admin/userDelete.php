<?php
require_once '../Database.php';
if (!isset($_SESSION)) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
}
//Perform delete

if (isset($_GET['delete'])) {
    $db = new Database();
    $sql = "DELETE FROM users WHERE id = :id";
    $db->executeWithParam($sql, array(array(':id', $_GET['delete'])));
    $db = null;
}

// Get users list

$db = new Database();
$email = $_SESSION['email'];
//Avoid deleting admin account 
$sql = "SELECT * FROM users WHERE id != 1 AND email != :email";
$db->executeWithParam($sql, array(array(':email', $email)));
$user = $db->resultset();
$db =null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- BOOTSTRAP CSS FONT -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- IONICONS FONT -->
    <link rel="stylesheet" href="../vendors/ionicons/css/ionicons.min.css">
    <!-- OUR STYLE FOR ADMIN -->
    <link rel="stylesheet" href="css/admin_style.css">
<!--    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">-->

    <title>Bellissimo Wachtwoord vergeten</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-8 ">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-3"><strong>Gebruiker #</strong></div>
                            <div class="col-3"><strong>E-mail</strong></div>
                            <div class="col-6"><strong>Verwijderen</strong></div>
                        </div>
                    </li>
                    <?php
                    if ($user) {
                        foreach ($user as $value) {
                            ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3"><?php print $value['id']; ?></div>
                                    <div class="col-3"><?php print $value['email']; ?></div>
                                    <div class="col-6"><a class="btn btn-primary" href="userDelete.php?delete=<?php print $value['id']; ?>" onclick="return confirm('Ben je zeker dat je deze gebruiker wil verwijderen?');">Verwijder gebruiker</a></div>
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li class="list-group-item">Geen gebruikers om te verwijderen</li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>