<?php

 

//include_once 'topItems.php';
include_once 'dbh/dbh.php';
//include_once 'topItems.php';
// hard coded product id being 15, and pass that as argument to get relevant info from databse (first the review using the product id from the review database and then the name from product database)
$productIDforReviews=18;
$sql1 = "SELECT * FROM pricereviewdb.review WHERE product_id= '$productIDforReviews'; ";
$sql2 = "SELECT * FROM pricereviewdb.product WHERE product_id= '$productIDforReviews'; ";
$sql0 = "SELECT * FROM pricereviewdb.product;";
           

$result0 = mysqli_query($conn, $sql0); 
                                $resultCheck = mysqli_num_rows($result0);
                                $counter0 = 0;
                                $data0 = array();
                                    if ($resultCheck0>0) {
                                        while($row0 = mysqli_fetch_assoc($result0)){
                                        $data[$counter0] = $row0;
                                        $counter0 = $counter0 + 1;
                                    }
                                    $item0 = $data0[0];
                                    $item1 = $data0[1];
                                    $item2 = $data0[2];
                                    $item3 = $data0[3];
                                    $item4 = $data0[4]; }



$result2 = mysqli_query($conn, $sql2); 
$resultCheck2 = mysqli_num_rows($result2);
$data2 = array();

if ($resultCheck2>0) {
    while($row2 = mysqli_fetch_assoc($result2)){
    echo "Reviews for item: "   ; 
    print_r($row2['product_name']."<br>");
    
    

}}

$result1 = mysqli_query($conn, $sql1); 
$resultCheck1 = mysqli_num_rows($result1);
$counter = 0;
$data1 = array();
    if ($resultCheck1>0) {
        while($row1 = mysqli_fetch_assoc($result1)){
        print_r($row1['review_description']);
        echo", ";
        print_r($row1['rating']);
        echo", ";
        echo " posted by User ";
        print_r($row1['customer_id']."<br>");
        $data1[$counter] = $row1;
        $counter = $counter + 1;
    
    }

    
    $review0 = $data[0];
    $review1 = $data[1];
    $review2 = $data[2];
    $review3 = $data[3];
    $review4 = $data[4]; }
                               
    


                                        
                                        
                                        ?>
