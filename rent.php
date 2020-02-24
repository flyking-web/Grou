<?php
require 'config.php';
require 'header.php';
$property_type=$min_beds=$max_beds=$min_price=$max_price='';
$property_type_err=$min_beds_err=$max_beds_err=$min_price_err=$max_price_err='';

//process data
if(isset($_POST['search_price'])){
//    grab data from form
    $property_type=$_POST['property_type'];
    $min_beds=$_POST['min_beds'];
    $max_beds=$_POST['max_beds'];
    $min_price=$_POST['min_price'];
    $max_price=$_POST['max_price'];

//    check if user exists
    $sql="SELECT * FROM `rent` WHERE max_price ='$max_price'";
    $results=mysqli_query($connection,$sql);
    if(mysqli_num_rows($results)>0){
//        user exists
        header("location:rent_customers.php");
        exit();
    }
////    hash user password
//    $password=md5($password);
//    echo $password.'<br>';
//    add user to and take to login
    $sql="INSERT INTO `rent`(`id`, `property_type`, `min_beds`, `max_beds`, `min_price`, `max_price`) VALUES (NULL,'$property_type','$min_beds','$max_beds','$min_price','$max_price')";
    if(mysqli_query($connection,$sql)){
//        if user has been successfully
        header("location:rent_customers.php");
        exit();
    }else{
        echo "ERROR:".mysqli_error($connection);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS online-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--    downloaded css-->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <!--    custom css-->
    <link rel="stylesheet" href="static/css/main.css">
    <title>Hello, world!</title>
</head>
<body>
<br><br>
<form action=""<?php echo htmlspecialchars(@$_SERVER['PHP_SELF'])?> method="post">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-xl-2">
            <div class="select">
                <select name="type" id="propertytype" onchange="validate()">
                    <option value="">Property Type</option>
                    <option value="1">Apartment</option>
                    <option value="17">House</option>
                    <option value="11">Land</option>
                    <option value="8">Office</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2">
            <div class="select">
                <select name="min_bed" id="bedrooms1">
                    <option value="">Min Beds</option>
                    <option value="1">1 Beds</option>
                    <option value="2">2 Beds</option>
                    <option value="3">3 Beds</option>
                    <option value="4">4 Beds</option>
                    <option value="5">5 Beds</option>
                    <option value="6">6 Beds</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2">
            <div class="select">
                <select name="max_bed" id="bedrooms2">
                    <option value="">Max Beds</option>
                    <option value="1">1 Beds</option>
                    <option value="2">2 Beds</option>
                    <option value="3">3 Beds</option>
                    <option value="4">4 Beds</option>
                    <option value="5">5 Beds</option>
                    <option value="6">6 Beds</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2">
            <div class="select">
                <select name="min_price">
                    <option value="">Min Price</option>
                    <option value="50000">50,000</option>
                    <option value="100000">100,000</option>
                    <option value="250000">250,000</option>
                    <option value="500000">500,000</option>
                    <option value="1000000">1M</option>
                    <option value="2500000">2.5M</option>
                    <option value="5000000">5M</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2">
            <div class="select">
                <select name="max_price">
                    <option value="">Max Price</option>
                    <option value="50000">20,000</option>
                    <option value="100000">30,000</option>
                    <option value="250000">40,000</option>
                    <option value="500000">50,000</option>
                    <option value="1000000">60,000</option>
                    <option value="2500000">100,000</option>
                    <option value="5000000">1M</option>
                    <option value="7500000">5M</option>
                    <option value="10000000">7.5M</option>
                    <option value="12500000">8.5M</option>
                    <option value="15000000">10M</option>
                    <option value="17500000">15.5M</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-xs-12 container" style="padding-left:0px;">
        <div class="col-md-12 pl_search"><button name="search_price" type="submit" class="button search_price lemon pull_right ml-30">
                <p><a href="rent_customer.php">SEARCH</a></p></button></div>
    </div>
</form>
</body>
