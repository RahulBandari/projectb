<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="basith";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
die(" connection failed:". $conn->connect_error);
}
//print_r($_POST); exit;
if(isset($_POST['submitbtn'])) {
$companyname = $_POST['companyname'];
$product= $_POST['productservice'];
$quantity= $_POST['quantity'];
$price= $_POST['price'];
$facilityprovided= $_POST['facilityprovided'];


$sql= "INSERT INTO view_deals (companyname, product, quantity, price, facilityprovider) values ( '$companyname' , '$product' , '$quantity' , '$price' , '$facilityprovided')";

if($conn->query($sql)===TRUE) {
    header("New record created successfully");
    exit;
} else{
       echo "Error not inserted <br>"; $conn->error; exit;
    }
}
   ?>

