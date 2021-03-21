<?php

 


include_once 'dbh/dbh.php';
// hard coded product id being 15, and pass that as argument to get relevant info from databse (first the review using the product id from the review database and then the name from product database)
$productID = 15;
$sql = "SELECT * FROM pricereviewdb.review WHERE product_id= '$productID'; ";
$sql2 = "SELECT * FROM pricereviewdb.product WHERE product_id= '$productID'; ";


$result2 = mysqli_query($conn, $sql2); 
$resultCheck2 = mysqli_num_rows($result2);
$data2 = array();

if ($resultCheck2>0) {
    while($row2 = mysqli_fetch_assoc($result2)){
    echo "Reviews for item: "   ; 
    print_r($row2['product_name']."<br>");
    
    

}}

$result = mysqli_query($conn, $sql); 
$resultCheck = mysqli_num_rows($result);
$counter = 0;
$data = array();
    if ($resultCheck>0) {
        while($row = mysqli_fetch_assoc($result)){
        print_r($row['review_description']);
        echo", ";
        print_r($row['rating']);
        echo", ";
        echo " posted by User ";
        print_r($row['customer_id']."<br>");
        $data[$counter] = $row;
        $counter = $counter + 1;
    
    }

    
    $review0 = $data[0];
    $review1 = $data[1];
    $review2 = $data[2];
    $review3 = $data[3];
    $review4 = $data[4]; }
                               
    


                                        
                                        
                                        ?>
