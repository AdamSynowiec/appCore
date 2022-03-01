<?php

$host = "###";
$user = "###";
$pass = "###";
$db_name = "###";

$con = mysqli_connect($host, $user, $pass, $db_name) or die('Database Connect error');
mysqli_set_charset($con,"utf8");

?>