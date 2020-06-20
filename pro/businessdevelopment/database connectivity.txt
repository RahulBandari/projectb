<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basith";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,Mobilenumber FROM business_development_professional";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["name"]. " - Email: ". $row["Mobilenumber"].  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>