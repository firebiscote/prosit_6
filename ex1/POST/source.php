<?php
include("C:/Users/maxim/Documents/1CESI/A2/projet 4/prosit_6/ex1/secret.php");
?>
<form action="destination.php" method="post">
 <input type="hidden" name="secret" value="<?= $secret?>"/>
 <input type="submit" value="OK">
</form>