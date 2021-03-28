<?php
  include_once 'dbh.php';

  $product = $_POST['product'];
  $price = $_POST['price'];
  $rating = $_POST['rating'];
  $description = $_POST['description'];
  $sql;

//  $sql = "INSERT INTO `pricereviewdb`.`product` (`product_name`, `product_rating`, `product_price`, `product_descrip`)  VALUES ('".$name."','".$rating."','".$price."','".$descrip."');";


   $sql = "INSERT INTO `pricereviewdb`.`product` (`product_name`, `product_price`, `product_rating`,  `product_descrip`)  
   VALUES ('$product','$price','$rating','$description');";
   
 mysqli_query($conn, $sql); 

  header("Location: ../search.html");

