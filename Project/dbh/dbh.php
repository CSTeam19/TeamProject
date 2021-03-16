<?php


$dbServerName = "localhost";
$dbUserName = "databaseuser";
$dbPassword = "toorqwer";
$dbName = "pricereviewdb";


$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}