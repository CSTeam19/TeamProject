<?php
  include_once 'dbh/dbh.php';  
  include_once 'topItems.php';
  $review_description = $_POST['reviewBox'];
  $item_rating = $_POST['ratings'];
  $sql;




   $sql = "INSERT INTO `pricereviewdb`.`review` (`review_description`,`rating`,`product_id`)  
   VALUES ('$review_description','$item_rating','$product_identifier');";
   
 mysqli_query($conn, $sql); 

 