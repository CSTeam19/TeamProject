<?php

$servername = 'localhost';
$username = 'databaseuser';
$password = 'toorqwer';

try {
  $conn = new PDO("mysql:host=$servername;dbname=pricereviewdb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>