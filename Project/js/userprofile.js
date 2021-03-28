
let userprofileUrl = './src/userprofile.php';

function userprofile() {
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
    var jsonPayload = '{"searchItem":"' + searchItem + '"}';

    document.getElementById("error").innerHTML = "";

    var request = new XMLHttpRequest();
    request.open("POST", userprofileUrl, true);
    request.setRequestHeader("Content-type", "application/json; charset=UTF-8");
    try {
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var jsonArray = JSON.parse(request.responseText);

                    console.log(jsonArray.customer_name , jsonArray.number_rating, jsonArray.customer_img);

                    document.getElementById("displayFullname").innerHTML = jsonArray.customer_name ;
                    document.getElementById("customerid").value = jsonArray.customer_id ;
                    document.getElementById("rating").innerHTML = 'Rates: ' + jsonArray.number_rating + ' ★ ';
                    document.getElementById("email").innerHTML = jsonArray.customer_email;
                    document.getElementById("phone").innerHTML = jsonArray.customer_phone;
                    document.getElementById("reviews").innerHTML = 'Reviews : ' + jsonArray.number_reviews;
                     document.getElementById('imgframe').src = 'img/' + jsonArray.customer_img;

                
                if (jsonArray.msg === "No user Found")
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

