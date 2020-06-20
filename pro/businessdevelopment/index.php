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
if(isset($_POST['loginbtn'])) {
$email= $_POST['Username'];
$password= $_POST['password'];




$sql="select * from business_development_professional where email='$email' and password='$password'";
$result = $conn->query($sql); //print_r($result); exit;

if(result>num_rows) {
    echo "login success";
    header("Location: home3.html");
    exit;
} else{
       echo "Error not inseted <br>"; $conn->error; exit;
    }
}
   ?>
