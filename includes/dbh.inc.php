<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassName = "";
$dbName = "projektas";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassName, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}