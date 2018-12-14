<?php
//login to phpmyadmin
$dbHost = "127.0.0.1";
$dbUser = "g00gol";
$dbPassword = "g00gol";
$dbName = "GAM/r";
$dbPort = "3306";

$conn = mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName,$dbPort);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";