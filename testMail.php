<?php
$message= "The message was sent with the following mail";
$headers = "From: lynniemi89@gmail.com";
mail("lynniemi89@gmail.com", "testing", $message, $headers);
echo"Test mail has been send";
?>