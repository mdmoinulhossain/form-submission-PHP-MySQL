<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "php";
$connection = mysqli_connect($serverName, $userName, $password, $databaseName);

if(!$connection){
    echo "Database Connection Error";
}
?>