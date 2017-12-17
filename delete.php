<?php
include ("connect.php");
$deleteid=$_GET['id'];
$del=mysqli_query($db_connect,"DELETE FROM comment WHERE id=$deleteid ");
header("location: succes_logat.php");
?>