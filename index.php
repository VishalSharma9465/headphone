<?php
$servername = "localhost"; 
$username = "root";        
$password = "Vishal@123";            
$dbname = "sys"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['send']))
$n_name = $_GET['n_name'];
$e_email = $_GET['e_email'];
$message = $_GET['message'];


$sql = "INSERT INTO headcore (n_name, e_email, message) VALUES ('$n_name', '$e_email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

