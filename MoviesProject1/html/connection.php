<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'movieDatabase';
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if ($conn -> error) {
    die("could not connect successfully");
}



