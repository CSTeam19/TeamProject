<?php

include_once 'dbh.php';





?>




<!DOCTYPE html>
<html>
<body>
<?php   
   
//product_name, product_price, product_rating, product_likes


    
    $sql = "SELECT * FROM pricereviewdb.product;";
    $result = mysqli_query($conn, $sql); 
    $resultCheck = mysqli_num_rows($result);
        if ($resultCheck>0) {
            while($row = mysqli_fetch_assoc($result)){
            echo $row['product_name']."<br>";
            echo $row['product_price']."<br>";
        }

    }
    
    
    
    
    
    
    ?>
    </body>
    </html>