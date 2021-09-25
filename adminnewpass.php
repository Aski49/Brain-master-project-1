<?php
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$conn = new mysqli("localhost","root","","brain master");

if ($conn->connect_error) {
    die("connection failed :".$conn->connect_error);
}

$sql = ("update admin set password='$password', cpassword='$cpassword' where email='$email'");

if ($conn->query($sql) === TRUE) {
  header("Location:home.html");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



?>