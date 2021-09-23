<?php

$password = $_POST['password'];
$password = $_POST['cpassword'];

$conn = new mysqli("localhost","root","","brain master");

if ($conn->connect_error) {
    die("connection failed :".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("update admin set password =?, cpassword =? where email =?");
    $stmt ->bind_param("ss",$password,$cpassword);
    $stmt ->execute();
    $stmt_result = $stmt-> get_result();

    if ($stmt_result->num_rows >0) {
        $data = $stmt_result -> fetch_assoc();
        if ($data['password'] == $password and $data['cpassword'] == $cpassword) {
            header("Location:home.html");
        }
        else{
            echo "Invalid";
        }
       
    }
    else{
        echo "Invalid";
    }
}
?>