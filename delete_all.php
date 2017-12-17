<?php
include ("connect.php");
$del=mysqli_query($db_connect,"DELETE FROM comment 	WHERE id=id");
header("location: succes_logat.php");
?>