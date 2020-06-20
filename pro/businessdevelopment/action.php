<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="basith";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error){
die(" connection failed:". $conn->connect_error);
}
//print_r($_POST); exit;
if(isset($_POST['registerbtn'])) {
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$password=$_POST['password'];



$sql="insert into business_development_professional (firstname,lastname,email,password)  values ('$firstname','$lastname','$email', '$password')";

if(result>num_rows) {
    echo "login success";
    header("Location: login.html");
    exit;
} else{
       echo "Error not inseted <br>"; $conn->error; exit;
    }
}
   ?>

