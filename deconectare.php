<?php

session_start();
unset($_SESSION);
session_destroy();
include ("comm.php");

?>