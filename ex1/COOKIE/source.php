<?php
include("C:/Users/maxim/Documents/1CESI/A2/projet 4/prosit_6/ex1/secret.php");
setcookie("secret", $secret, time() + 10, '/');
?>
<a href="destination.php">cookie</a>