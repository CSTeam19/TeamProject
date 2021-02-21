<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['login-btn'])) {

    $user = $_POST['user-name'];
    $password = $_POST['user-pass'];

    try {
      $SQLQuery = "SELECT * FROM customer WHERE customer_email = :useremail";
      $statement = $conn->prepare($SQLQuery);
      $statement->execute(array(':useremail' => $user));

      while($row = $statement->fetch()) {
        $hashed_password = $row['customer_password'];
        $username = $row['customer_name'];
        $useremail = $row['customer_email'];

        if(password_verify($password, $hashed_password)) {
          $_SESSION['username'] = $username;
          header('location: dashboard.php');
        }
        else {
          echo "Error: Invalid username or password";
        }
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>