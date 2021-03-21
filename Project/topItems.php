<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
    <title>Top Items</title>     
    <!-- Bootstrap core CSS -->     
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Custom styles for this template -->     
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="shortcut icon" href="img/logo.png"/> 
    <script src="js/jquery.min.js"></script>     
    <script src="js/bootstrap.min.js"></script>     
</head> 
<?php


                                include_once 'dbh/dbh.php';
                                $sql = "SELECT * FROM pricereviewdb.product;";
                                $result = mysqli_query($conn, $sql); 
                                $resultCheck = mysqli_num_rows($result);
                                $counter = 0;
                                $data = array();
                                    if ($resultCheck>0) {
                                        while($row = mysqli_fetch_assoc($result)){
                                        $data[$counter] = $row;
                                        $counter = $counter + 1;
                                    }
                                    $item0 = $data[0];
                                    $item1 = $data[1];
                                    $item2 = $data[2];
                                    $item3 = $data[3];
                                    $item4 = $data[4]; }?>
<?php


                                    include_once 'dbh/dbh.php';
                                    $sql = "SELECT * FROM pricereviewdb.productreview;";
                                    $resultRev = mysqli_query($conn, $sql); 
                                    $resultCheck = mysqli_num_rows($result);
                                    $counter = 0;
                                    $dataRev = array();
                                        if ($resultCheck>0) {
                                            while($row = mysqli_fetch_assoc($result)){
                                            $data[$counter] = $row;
                                            $counter = $counter + 1;
                                        }
                                        $review0 = $dataRev[0];
                                        $review1 = $dataRev[1];
                                        $review2 = $dataRev[2];
                                        $review3 = $dataRev[3];
                                        $review4 = $dataRev[4]; }?>

<body class="font-weight-light text-secondary"> 
    <nav class="bg-white navbar navbar-expand-lg navbar-light border sticky-top py-lg-0 mb-3"> 
        <div class="container"> 
            <a href="index.html"><img src="img/logo.png" class="font-weight-bold navbar-brand text-dark"></a> 
            <h4>Top Items!</h4> 
            <ul class="flex-row ml-auto navbar-nav order-lg-1 pl-2 pr-2"> 
                <li class="nav-item"> 
                    <a class="nav-link p-2 pb-3 pl-2 pr-2 pt-3" href="search.html" title="Search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"></path>
                            </g>
                        </svg></a> 
                </li>
                <li class="nav-item"> 
</li>                 
                <li class="nav-item"> 
                    <a class="nav-link pb-3 pl-2 pr-2 pt-3" href="userProfile.html" title="Profile"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                            </g>
                        </svg></a> 
                </li>                 
            </ul>             
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-3" aria-controls="navbarNavDropdown-3" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button>             
            <div class="collapse navbar-collapse " id="navbarNavDropdown-3"> 
                <ul class="ml-auto navbar-nav"> 
                    <li class="nav-item active"> 
</li>                     
                    <li class="nav-item"> 
</li>                     
                    <li class="nav-item"> 
</li>                     
                    <li class="nav-item"> 
</li>                     
                </ul>                 
            </div>             
        </div>         
    </nav>     
    <div class="container d-flex justify-content-center mt-50 mb-50"> 
        <div class="row">
            <div class="col-md-10"> 
                <div class="card card-body"> 
                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row"> 
                        <div class="mr-2 mb-3 mb-lg-0"> 
                            <img src="<?php print_r($item0['product_image']); ?>" width="150" height="150" alt=""> 
                        </div>                         
                        <div class="media-body"> 
                            <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">
                            <?php
                            print_r($item0['product_name']);
                            
                            
                            ?>
                            
                            </a> 
                            
                            
                            </h6> 
                            <ul class="list-inline list-inline-dotted mb-3 mb-lg-2"> 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Phones</a>
                                </li>                                 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Mobiles</a>
                                </li>                                 
                            </ul>  
                                                       
                            <!-- <p class="mb-3">128 GB ROM | 15.49 cm (6.1 inch) Display 12MP Rear Camera | 7MP Front Camera A12 Bionic Chip Processor | Gorilla Glass with high quality display </p> -->
                            
                            <!--script for query results -->
                            <?php print_r($item0['product_descrip']."<br>");?>
                            <ul class="list-inline list-inline-dotted mb-0"> 
                                <li class="list-inline-item">All items from 
                                 <button type="button" class="btn btn-warning mt-4 text-white" data-toggle="modal" data-target="#myModalReviews1">View Review</button>   
                              
                                </li>    
                                <li class="list-inline-item">Add to 
                                    <a href="#" data-abc="true">wishlist</a>
                                </li>                              
                            </ul>                             
                        </div>                         
                        <div class="mt-3 mt-lg-0 ml-lg-3 text-center"> 
                            <div> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                            </div>                             
                            <div class="text-muted"><?php print_r($item0['product_review_count']);?> reviews</div>    
                            <div class="text-muted">
                        <?php 
                        print_r($item0['product_likes']);
                        ?>
                        
                           likes </div>  
                                                    
                            
                            <button type="button" class="btn btn-warning mt-4 text-white" data-toggle="modal" data-target="#myModalres">Add Review</button>   
                                                        
                        </div>                         
                    </div>                     
                </div>                 
                <div class="card card-body mt-3"> 
                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row"> 
                        <div class="mr-2 mb-3 mb-lg-0"> 
                            <img src="<?php print_r($item1['product_image']); ?>" width="150" height="150" alt=""> 
                        </div>                         
                        <div class="media-body"> 
                            <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true"><?php print_r($item1['product_name']."<br>");?></a> </h6> 
                            <ul class="list-inline list-inline-dotted mb-3 mb-lg-2"> 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Phones</a>
                                </li>                                 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Mobiles</a>
                                </li>                                 
                            </ul>                             
                            <p class="mb-3"> <?php print_r($item1['product_descrip']."<br>");?> </p> 
                            <ul class="list-inline list-inline-dotted mb-0"> 
                                <li class="list-inline-item">All items from 
                                    <a href="#" data-abc="true">Mobile junction</a>
                                </li>                                 
                                <li class="list-inline-item">Add to 
                                    <a href="#" data-abc="true">wishlist</a>
                                </li>                                 
                            </ul>                             
                        </div>                         
                        <div class="mt-3 mt-lg-0 ml-lg-3 text-center"> 
                            <div> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                            </div>                             
                            <div class="text-muted"><?php print_r($item1['product_review_count']);?> reviews</div>  
                            <div class="text-muted">
                        <?php 
                        print_r($item1['product_likes']);
                        ?>
                        
                           likes </div>                            
                            <button type="button" class="btn btn-warning mt-4 text-white">
                                <i class="icon-cart-add mr-2"></i>Add Review
                            </button>                             
                        </div>                         
                    </div>                     
                </div>                 
                <div class="card card-body mt-3"> 
                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row"> 
                        <div class="mr-2 mb-3 mb-lg-0"> 
                            <img src="<?php print_r($item2['product_image']); ?>" width="150" height="150" alt=""> 
                        </div>                         
                        <div class="media-body"> 
                            <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true"> <?php print_r($item2['product_name']."<br>");?></a> </h6> 
                            <ul class="list-inline list-inline-dotted mb-3 mb-lg-2"> 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Phones</a>
                                </li>                                 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Mobiles</a>
                                </li>                                 
                            </ul>                             
                            <p class="mb-3"><?php print_r($item2['product_descrip']."<br>");?> </p> 
                            <ul class="list-inline list-inline-dotted mb-0"> 
                                <li class="list-inline-item">All items from 
                                    <a href="#" data-abc="true">Mobile point</a>
                                </li>                                 
                                <li class="list-inline-item">Add to 
                                    <a href="#" data-abc="true">wishlist</a>
                                </li>                                 
                            </ul>                             
                        </div>                         
                        <div class="mt-3 mt-lg-0 ml-lg-3 text-center"> 
                            <div> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                            </div>                             
                            <div class="text-muted"><?php print_r($item2['product_review_count']);?> reviews</div> 
                            <div class="text-muted"><?php print_r($item2['product_likes']);?> likes </div>                             
                            <button type="button" class="btn btn-warning mt-4 text-white">
                                <i class="icon-cart-add mr-2"></i>Add Review
                            </button>                             
                        </div>                         
                    </div>                     
                </div>
                <div class="card card-body mt-3"> 
                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row"> 
                        <div class="mr-2 mb-3 mb-lg-0"> 
                            <img src="<?php print_r($item3['product_image']); ?>" width="150" height="150" alt=""> 
                        </div>                         
                        <div class="media-body"> 
                            <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true"><?php print_r($item3['product_name']."<br>");?></a> </h6> 
                            <ul class="list-inline list-inline-dotted mb-3 mb-lg-2"> 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Phones</a>
                                </li>                                 
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted" data-abc="true">Mobiles</a>
                                </li>                                 
                            </ul>                             
                            <p class="mb-3"><?php print_r($item3['product_descrip']."<br>");?> </p> 
                            <ul class="list-inline list-inline-dotted mb-0"> 
                                <li class="list-inline-item">All items from 
                                    <a href="#" data-abc="true">Mobile junction</a>
                                </li>                                 
                                <li class="list-inline-item">Add to 
                                    <a href="#" data-abc="true">wishlist</a>
                                </li>                                 
                            </ul>                             
                        </div>                         
                        <div class="mt-3 mt-lg-0 ml-lg-3 text-center"> 
                            <div> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                            </div>                             
                            <div class="text-muted"><?php print_r($item3['product_review_count']);?> reviews</div> 
                            <div class="text-muted"><?php print_r($item3['product_likes']);?> likes </div>                               
                            <button type="button" class="btn btn-warning mt-4 text-white">
                                <i class="icon-cart-add mr-2"></i>Add Review
                            </button>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>
        </div>
    </div>     
    <footer class="bg-dark mt-3 text-white"> 
        <div class="container"> 
            <div class="pb-3 pt-3 small"> 
                <div class="align-items-center row"> 
                    <div class="col-md pb-2 pt-2"> 
                        <p class="mb-0">&copy; All Rights Reserved - <a href="https://github.com/CSTeam19/TeamProject">Price Review</a> by <a href="https://github.com/CSTeam19">Team19</a></p> 
                    </div>                     
                </div>                 
            </div>             
        </div> 
        
        
        <div class="container"> 
        <!-- Modal -->
        <div class="modal fade" id="myModalres" role="dialog"> 
            <div class="modal-dialog"> 
                <!-- Send reset password code Modal -->
                <div class="modal-content"> 
                    <div class="modal-header"> 
                        <h4 class="modal-title text-dark">Add a Review!</h4> 
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-dark"> 
                        <form class="form-group" action="addNewReview.php" method="POST"> 
                            <?php $product_identifier = $item0['product_id'] ?>
<!-- import customer ID-->
                            <fieldset class="rating" style="font-size: 10px">
                                <legend>Please rate:</legend>
                                <input type="radio" id="star1" name="ratings" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                                <input type="radio" id="star2" name="ratings" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                                <input type="radio" id="star3" name="ratings" value="3" /><label for="star3" title="Meh">3 stars</label>
                                <input type="radio" id="star4" name="ratings" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                                <input type="radio" id="star5" name="ratings" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                            </fieldset>
                            <label class = "text-dark">
                                <input name="reviewBox"style="height:200px;width:400px;padding-bottom: 160px;font-size:14pt;" type="text" class="form-control" id="reviewBox" placeholder="Enter your review."> 
                            </label>
                            <div class="modal-footer">                          
                          
                            <button type="submit" name="submit"> Submit Review</button>                      
                                           
                    </div>
                        </form>
                    </div>  
                    </div> 
                    </div> 
                    </div> 
                    </div> 


                    


                    <div class="container"> 
        <!-- Review Modal Item 1 -->
        <div class="modal fade" id="myModalReviews1" role="dialog"> 
            <div class="modal-dialog"> 
                <!-- View first 5 reviews-->
                <div class="modal-content"> 
                    <div class="modal-header"> 
                        <h4 class="modal-title text-dark">View Reviews</h4> 
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <a  <button type="submit" name="submit" href= "viewAllreviews1.php"> View all Reviews </button>   </a>
                    </div>
                    <div class="modal-body text-dark"> 
                            <label class = "text-dark">
                                 
                            </label>
                            <div class="modal-footer">                          
                          
                                           
                    </div>
                    </div> 
                    </div> 
                    </div> 
                    </div> 
                    

    </footer>
</body>
