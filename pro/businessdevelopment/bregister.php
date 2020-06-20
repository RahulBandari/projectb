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
if(isset($_POST['registerbtn'])) {
$companyname= $_POST['companyname'];
$registerationnumber= $_POST['registerationnumber'];
$businesstype= $_POST['businesstype'];
$firstname= $_POST['firstname'];
$address= $_POST['address'];
$email= $_POST['email'];
$password= $_POST['password'];
$state= $_POST['state'];
$country= $_POST['country'];
$pincode= $_POST['pincode'];


$sql= "INSERT INTO register (companyname, Registerationnumber, businesstype, firstname, address, email, password, state, country, pincode) 
values ( '$companyname' , '$registerationnumber' , '$businesstype' , '$firstname' , '$address' , '$email' , '$password' , '$state' , '$country' , '$pincode')";

if(result>num_rows) {
    echo "login success";
    header("Location: Blogin.html");
    exit;
} else{
       echo "Error not inserted <br>"; $conn->error; exit;
    }
}
   ?>

