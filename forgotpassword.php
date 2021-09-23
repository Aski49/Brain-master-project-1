<?php


$username = $_POST['username'];
$email = $_POST['email'];

$conn = new mysqli("localhost","root","","brain master");

if ($conn->connect_error) {
    die("connection failed :".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("select * from admin where username =? and email =?");
    $stmt ->bind_param("ss",$username,$email);
    $stmt ->execute();
    $stmt_result = $stmt-> get_result();

    if ($stmt_result->num_rows >0) {
        $data = $stmt_result -> fetch_assoc();
        if ($data['username'] == $username and $data['email'] == $email) {
            header("Location:AdminOTP.html");
        }
        else{
            echo "Invalid username or email";
        }
       
    }
    else{
        echo "<h1>Invalid username or email</h1>";
    }
}
?>