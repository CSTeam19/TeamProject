<?php
  include_once 'dbh.php';

  $name = $_POST['name'];
  $price = $_POST['price'];
  $rating = $_POST['rating'];
  $descrip = $_POST['descrip'];

  $sql = "INSERT INTO product (product_name , product_price, product_rating, product_descrip) VALUES ('$name','$price','$rating','    $descrip');";
 
 mysqli_query($conn, $sql);

  header("Location: ../offcanvas.html");
