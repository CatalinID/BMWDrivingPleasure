<?php
error_reporting (E_ALL ^ E_NOTICE);
$db_username="cristi";
$db_password="123";
$db_name="db_wad";
$db_connect= mysqli_connect("localhost",$db_username,$db_password,$db_name) or die();
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL:".mysqli_connect_error();
}

//echo "Connected successfully";

?>