<?php
$dbconnect = mysqli_connect("localhost", "root", "", "tarp");

$sql = "SELECT * FROM about";

$query = mysqli_query($dbconnect, $sql);
$i=0;
while($rs2 = mysqli_fetch_assoc($query)){

$company = $rs2['company_name'];
$Title = $rs2['Title'];
$Description = $rs2['Description'];
$button1 = $rs2['button1'];
$button2 = $rs2['button2'];
$back =  $rs2['back'];


$service_1 = $rs2['Service_1'];
$service_1_des = $rs2['service_1_des'];
$service_2 = $rs2['Service_2'];
$service_2_des = $rs2['service_2_des'];
$service_3 = $rs2['Service_3'];
$service_3_des = $rs2['service_3_des'];


$product_1 = $rs2['Product_1'];
$product_1_price = $rs2['product_1_price'];
$product_1_img =  $rs2['product_1_img'] ;
$product_2 = $rs2['Product_2'];
$product_2_price = $rs2['product_2_price'];
$product_2_img =  $rs2['product_2_img'] ;
$product_3 = $rs2['Product_3'];
$product_3_price = $rs2['product_3_price'];
$product_3_img =  $rs2['product_3_img'] ;
$product_4 = $rs2['Product_4'];
$product_4_price = $rs2['product_4_price'];
$product_4_img =  $rs2['product_4_img'] ;
$product_5 = $rs2['Product_5'];
$product_5_price = $rs2['product_5_price'];
$product_5_img =  $rs2['product_5_img'] ;
$product_6 = $rs2['Product_6'];
$product_6_price = $rs2['product_6_price'];
$product_6_img =  $rs2['product_6_img'] ;


$latlang = $rs2['LatLang'];
$state = $rs2['State'];
$email = $rs2['email'];
$phno = $rs2['phno'];
$fax = $rs2['fax'];


$Address = $rs2['Address'];
$zipcode = $rs2['Zipcode'];
$fontz = "Maven Pro";

$dbconnect = mysqli_connect("localhost", "root", "", "tarp");

    $html = '
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">

    <script>
    function incrementValue()
    {
        var value = parseInt(document.getElementById("number1").value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("number1").value = value;
    }

    function decrementValue()
    {
        var value = parseInt(document.getElementById("number1").value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>0){
        value--;
        document.getElementById("number1").value = value;
        }
    }


    function incrementValue2()
    {
        var value = parseInt(document.getElementById("number2").value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("number2").value = value;
    }

    function decrementValue2()
    {
        var value = parseInt(document.getElementById("number2").value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>0){
        value--;
        document.getElementById("number2").value = value;
        }
    }


    function incrementValue3()
    {
        var value = parseInt(document.getElementById("number3").value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("number3").value = value;
    }

    function decrementValue3()
    {
        var value = parseInt(document.getElementById("number3").value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>0){
        value--;
        document.getElementById("number3").value = value;
        }
    }


    function incrementValue4()
    {
        var value = parseInt(document.getElementById("number4").value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("number4").value = value;
    }

    function decrementValue4()
    {
        var value = parseInt(document.getElementById("number4").value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>0){
        value--;
        document.getElementById("number4").value = value;
        }
    }

    function incrementValue5()
    {
        var value = parseInt(document.getElementById("number5").value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("number5").value = value;
    }

    function decrementValue5()
    {
        var value = parseInt(document.getElementById("number5").value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>0){
        value--;
        document.getElementById("number5").value = value;
        }
    }

    function incrementValue6()
    {
        var value = parseInt(document.getElementById("number6").value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("number6").value = value;
    }

    function decrementValue6()
    {
        var value = parseInt(document.getElementById("number6").value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>0){
        value--;
        document.getElementById("number6").value = value;
        }
    }
</script>
</head>

<body style="font-family: Maven Pro, sans-serif;margin:0px">

    <div id="nav"
        style="width:100%;background-color:#ffffff;height:70px;color:#000000;box-shadow:0px 0px 5px 10px soild #6d6d6d;position:fixed;z-index:10;padding:1%">
        <img src="Images/logo.jpg" style="float:left;width:10%">
        <p style="float:left;margin-right:15%;font-size:20px"><b>' . $company . '</b></p>

        <p style="float:left;margin:2%">About</p>
        <p style="float:left;margin:2%">Products</p>
        <p style="float:left;margin:2%">Services</p>
        <p style="float:left;margin:2%">Location</p>
        <p style="float:left;margin:2%">Contact Info</p>

        <p
            style="color:#ffffff;padding:1%;background-color:rgba(255, 6, 156, .9);;float: right;;border:2px solid rgba(252, 111, 0, .93);border-radius:2px;margin-left:1%;margin-right:3%">
            LOGIN</p>
        <p
            style="color: rgba(252, 111, 0, .93);;padding:1%;;float: right;;border: 2px solid rgba(252, 111, 0, .93);border-radius:2px;margin-left:1%">
            REGISTER</p>
    </div>


    <div style="width:95%;margin:auto;background:url(Images/' . $back . ')">
        <div
            style="width:100%;background:rgba(0,0,0,0.5);text-align: center;padding:150px 0px 250px 0px;color:#ffffff;margin:auto">
            <h1 style="font-size:70px">' . $Title . '</h1>
            <p style="font-size:20px">' . $Description . '</p>


            <div id="buttons" style="width:35%;margin:auto">
                <p
                    style="padding:2%;background-color:#4453a8;;float:left;border: 2px solid #4453a8;border-radius:2px;margin-left:30%">
                    ' . $button1 . '</p>
                <p style="padding:2%;;float:left;border: 2px solid #4453a8;border-radius:2px;margin-left:3%">
                ' . $button2 . '</p>
            </div>
        </div>
    </div>

    <div
        style="width:100%;height:800px;background:linear-gradient(135deg, rgba(252, 111, 0, .93) 29%, rgba(255, 6, 156, .9)), linear-gradient(180deg, #fc6f00, #fc6f00);">

        <div style="width:40%;height:200px;padding:2%;float:left;margin:3%;border-radius: 10px;color:#ffffff">
            <h1 style="font-size:40px;font-weight: 1000">You Can Enjoy The
                Best Services Offered</h1>
            <p>The greatest advances of civilization, whether in architecture or painting, in science and literature, in
                industry or agriculture, have never come from centralized government.</p>
        </div>

        <div
            style="width:40%;height:200px;padding:2%;float:left;border: 1px soild black;background: #ffffff;margin:3%;border-radius: 10px">
            <img src="Images/1.png" style="width:10%;">
            <h2>' . $service_1 . '</h2>
            <p>' . $service_1_des . '</p>
        </div>


        <div
            style="width:40%;height:200px;padding:2%;float:left;border: 1px soild black;background: #ffffff;margin:3%;border-radius: 10px">
            <img src="Images/2.png" style="width:10%">
            <h2>' . $service_2 . '</h2>
            <p>' . $service_2_des . '</p>
        </div>


        <div
            style="width:40%;height:200px;padding:2%;float:left;border: 1px soild black;background: #ffffff;margin:3%;border-radius: 10px">
            <img src="Images/3.png" style="width:10%">
            <h2>' . $service_3 . '</h2>
            <p>' . $service_3_des . '</p>
        </div>

    </div>

    <div style="width:100%;margin-left:4%;height:800px;margin-bottom:100px">
        <div style="width:100%;height:300px">

            <h1 style="font-size:38px;text-align:center">PRODUCTS</h1>

            <div style="text-align:center;width:90%;margin:auto;height:400px">
                 <form action="sendProductInfo.php" method="GET">
                    <input type="hidden" name="company_name" value="' . $company . '">
                <div
                    style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url(Images/' . $product_1_img . ');background-size:100% 100%;border-radius:10px;padding-bottom: %">
                    <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">
                        <h2 style="margin:2px">' . $product_1 . '</h2>
                        <div style="width:47%;margin:auto;height:60px;margin-left:33%">
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="incrementValue()" value="+" />
                            <input type="hidden" value="' . $product_1 . '" name="product1">
                            <input
                                style="float:left;width:10%;text-align: center;height:30px;margin-right:15%;border:none;background:rgba(255,255,255,0);font-size:30px;margin-top:8%"
                                type="text" id="number1" name="number1" value="0" />
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="decrementValue()" value="-" />
                        </div>
                    </div>
                </div>

                <div
                    style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url(Images/' . $product_2_img . ');background-size:100% 100%;border-radius:10px">
                    <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">
                        <h2 style="margin:2px">' . $product_2 . '</h2>
                        <div style="width:47%;margin:auto;height:60px;margin-left:33%">
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="incrementValue2()" value="+" />
                            <input type="hidden" value="' . $product_2 . '" name="product2">
                            <input
                                style="float:left;width:10%;text-align: center;height:30px;margin-right:15%;border:none;background:rgba(255,255,255,0);font-size:30px;margin-top:8%"
                                type="text" id="number2" name="number2" value="0" />
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="decrementValue2()" value="-" />
                        </div>
                    </div>
                </div>


                <div
                    style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url(Images/' . $product_3_img . ');background-size:100% 100%;border-radius:10px">
                    <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">
                        <h2 style="margin:2px">' . $product_3 . '</h2>
                        <div style="width:47%;margin:auto;height:60px;margin-left:33%">
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="incrementValue3()" value="+" />
                            <input type="hidden" value="' . $product_3 . '" name="product3">
                            <input
                                style="float:left;width:10%;text-align: center;height:30px;margin-right:15%;border:none;background:rgba(255,255,255,0);font-size:30px;margin-top:8%"
                                type="text" id="number3" name="number3" value="0" />
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="decrementValue3()" value="-" />
                        </div>
                    </div>
                </div>

            </div>





            <div style="width:100%;height:300px">
            <div style="text-align:center;width:90%;margin:auto;height:400px">

                <div
                    style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url(Images/' . $product_4_img . ');background-size:100% 100%;border-radius:10px;padding-bottom: %">
                    <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">
                        <h2 style="margin:2px">' . $product_4 . '</h2>
                        <div style="width:47%;margin:auto;height:60px;margin-left:33%">
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="incrementValue4()" value="+" />
                            <input type="hidden" value="' . $product_4 . '" name="product4">
                            <input
                                style="float:left;width:10%;text-align: center;height:30px;margin-right:15%;border:none;background:rgba(255,255,255,0);font-size:30px;margin-top:8%"
                                type="text" id="number4" name="number4" value="0" />
                            <input
                                style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                type="button" onclick="decrementValue4()" value="-" />
                        </div>
                    </div>
                </div>


                    <div
                        style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url(Images/' . $product_5_img . ');background-size:100% 100%;border-radius:10px">
                        <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">
                            <h2 style="margin:2px">' . $product_5 . '</h2>
                            <div style="width:47%;margin:auto;height:60px;margin-left:33%">
                                <input
                                    style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                    type="button" onclick="incrementValue5()" value="+" />
                                <input type="hidden" value="' . $product_5 . '" name="product4">
                                <input
                                    style="float:left;width:10%;text-align: center;height:30px;margin-right:15%;border:none;background:rgba(255,255,255,0);font-size:30px;margin-top:8%"
                                    type="text" id="number5" name="number5" value="0" />
                                <input
                                    style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                    type="button" onclick="decrementValue5()" value="-" />
                            </div>
                        </div>
                    </div>


                    <div
                        style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url(Images/' . $product_6_img . ');background-size:100% 100%;border-radius:10px">
                        <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">
                            <h2 style="margin:2px">' . $product_6 . '</h2>
                            <div style="width:47%;margin:auto;height:60px;margin-left:33%">
                                <input
                                    style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                    type="button" onclick="incrementValue6()" value="+" />
                                <input type="hidden" value="' . $product_6 . '" name="product5">
                                <input
                                    style="float:left;width:10%;text-align: center;height:30px;margin-right:15%;border:none;background:rgba(255,255,255,0);font-size:30px;margin-top:8%"
                                    type="text" id="number6" name="number6" value="0" />
                                <input
                                    style="float:left;padding:5%;margin-right:15%;border:1px solid black;background:rgba(255,255,255,0);font-size:20px;border-radius:200px;margin-top:4%"
                                    type="button" onclick="decrementValue6()" value="-" />
                            </div>
                        </div>
                    </div>

                </div>
                <input type="submit" value="submit">

            </div>

            </form>
        </div>
    </div>

    <iframe src="maps2.php" style="margin:0px;width:100%;height:300px;overflow:hidden;border:none"></iframe>

    <footer>
        <div style="width:100%;color:#65666b;background-color:#ffffff;height:250px;">
            <div style="width:90%;margin-left:13%;">
                <div style="width:30%;float:left;margin:1%">
                    <div style="width:100%">
                        <img src="Images/logo.jpg" style="float:left;width:30%">
                        <h2 style="color:#000000;float:left">' . $company . '</h2>
                    </div><br><br><br>
                    <p>To design is much more than simply to assemble,<br>
                        to order, or even to edit: it is to add value and meaning, <br>
                        to illuminate, to simplify, to clarify, <br>
                        to modify, to dignify, <br>
                        to dramatize, to persuade, <br>
                        and perhaps even to amuse. </p>

                    <p style="color:#000000"><b>- Anonymous</b></p>
                </div>

                <div style="width:15%;float:left;margin:1%">
                    <h2 style="color:#000000">Services</h2>
                    <p>View Products</p>
                    <p>Location Based Services</p>
                    <p>Search</p>
                    <p>Trend Analysis</p>
                </div>

                <div style="width:20%;float:left;margin:1%">
                    <h2 style="color:#000000">Contact Info</h2>
                    <p>POC: Anonymous</p>
                    <hr style="width:80%;float:left"><br>
                    <p><b>Email:</b> ' . $email . '</p>
                    <p><b>Phone:</b> ' . $phno . '</p>
                    <p><b>Fax:</b> ' . $fax . '</p>
                </div>

                <div style="width:20%;float:left;margin:1%">
                    <h2 style="color:#000000">Address</h2>
                    <p>' . $Address . ' </p>

                    <p>' . $zipcode . '</p>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>
    ';

$loc = "C:/xampp/htdocs/tarp/" . $i . ".html";
file_put_contents($loc, $html);
$i++;

}
 ?>