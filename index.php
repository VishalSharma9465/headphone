<?php
$servername = "localhost";
$username = "root";
$password = "Vishal@123";
$db = "sys";
$conn = mysqli_connect($servername, $username, $password,$bd);

  if(isset($_GET["send"])){
  $fname = $_GET["fname"];
  $email = $_GET["email"];
  $message = $_GET["message"];

  $sqlir = "INSERT INTO headcore (n_name,e_email,message) VALUES ('$fname','$email','$message')";
mysqli_quary($conn,$sqlir))


  }
  ?>
