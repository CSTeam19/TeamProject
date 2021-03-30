<?php

  require_once('dbconnect.php');

    if ($conn->connect_error)
    {
      error( $conn->connect_error);
    }

    if (isset($_POST['submitnewproduct'])) {

	$customerid = $_POST['customerid'];
  	$name = $_POST['newproductname'];
 	$price = $_POST['newproductprice'];
  	$description = $_POST['newproductdescription'];
  	$image = $_FILES['newproductfile']['name'];
 	$target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES['newproductfile']['name']);

  	$sql;

	// Select file type
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	// Valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");

	// Check extension
	if ( in_array($imageFileType, $extensions_arr) ){

	// Insert record


	$moveimage = "/var/www/html/img/". $image;
	$imageLink = "http://www.pricereview.cf/img/". $image;


	$sql = "INSERT INTO `pricereviewdb`.`product` (`product_name`, `product_price`, `product_descrip`, `product_image`)  
			VALUES ('".$name."','".$price."','".$description."', '".$imageLink."');";
	mysqli_query($conn, $sql);

	// Upload file
	chown($target_dir, 777);

	$uploadSuccess = move_uploaded_file($_FILES['newproductfile']['tmp_name'], $moveimage);


	// if ($uploadSuccess === TRUE)
	// {
	// 	echo "Image upload works! Where $image = " . $image . " |  \nWhere $moveimage = " .$moveimage. " |  \nWhere $imageLink = " .$imageLink;
	// 			//header("Location: /userprofile.html");

	// }
	// else
	// {
	// 	echo "Failed to upload From: " . $_FILES['newproductfile']['tmp_name']. " To: " . $moveimage; 
	// 			//header("Location: /index.html");

	// }

	// }

	//echo $customerid;

	header("Location: /dashboard.html");

}

?>

