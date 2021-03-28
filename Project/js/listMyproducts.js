
let productUrl = './src/listproducts.php';
//let reviewUrl = './src/listreviews.php';
let addReviewtUrl = './src/addNewReview.php';

var jsonArray, i, customer_id;

function listMyproduct() {
    'use strict';

     customer_id = 0;
    var data = document.cookie;
    var splits = data.split(";");
    for(var i = 0; i < splits.length; i++)
    {
        var thisOne = splits[i].trim();
        var tokens = thisOne.split("=");

        if( tokens[0] == "customer_id" )
        {
            customer_id = parseInt( tokens[1].trim() );
        }
    }
    var searchItem = customer_id;
   console.log(searchItem);
    var jsonPayload = '{"searchItem":"' + searchItem + '"}';

    document.getElementById("error").innerHTML = "";
    var List = document.getElementById("productDiv");
    List.innerHTML = "";

    var request = new XMLHttpRequest();
    request.open("POST", productUrl, true);
    request.setRequestHeader("Content-type", "application/json; charset=UTF-8");
    try {
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               jsonArray = JSON.parse(request.responseText);

            for (i = 0; i < jsonArray.length; i++){

            var row = ` <div class="card card-body"> 
                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row"> 
                        <div class="mr-2 mb-3 mb-lg-0"> 
                            <img src="${jsonArray[i].product_image}" width="150" height="150" alt=""> 
                        </div>                         
                        <div class="media-body"> 
                            <h6 class="media-title font-weight-semibold"> <a href="productPageLog.html?${jsonArray[i].product_id};${jsonArray[i].product_price};${jsonArray[i].product_rating};${jsonArray[i].product_image};${jsonArray[i].number_reviews};${jsonArray[i].number_rating}" data-abc="true">${jsonArray[i].product_name} | $ ${jsonArray[i].product_price}</a> </h6>                           
                            <p class="mb-3">${jsonArray[i].product_descrip} </p> 
                            <ul class="list-inline list-inline-dotted mb-0"> 
                                <li class="list-inline-item">
                                    <a href="productPageLog.html?${jsonArray[i].product_id};${jsonArray[i].product_price};${jsonArray[i].product_rating};${jsonArray[i].product_image};${jsonArray[i].number_reviews};${jsonArray[i].number_rating}" data-abc="true">View Reviews</a>
                                </li>                                 
                            </ul>                             
                        </div>     
                        <li class="list-inline-item"> 
                                                                                                        
                            <div class="text-muted">| ${jsonArray[i].number_reviews} reviews </div>
                            <div class="text-muted">| ${jsonArray[i].number_rating} Rates  </div>
                        </li> 
                          <div class="text-muted"> 
                        </div>                      
                        </div>                         
                    </div>                     
                </div> `;

                 List.innerHTML += row;        

                }

                
                if (jsonArray.msg === "No Products Found")
                    document.getElementById("error").innerHTML = jsonArray.msg;


            }
        }
        request.responseType = "text";
       request.send(jsonPayload);


    }
    catch (error) {
        document.getElementById("error").innerHTML = error.message;
        document.getElementById("error").style.color = "red";
    }
}

