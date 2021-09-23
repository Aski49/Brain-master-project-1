<?php



$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost","root","","brain master");

if ($conn->connect_error) {
    die("connection failed :".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("select * from admin where email =? and password =?");
    $stmt ->bind_param("ss",$email,$password);
    $stmt ->execute();
    $stmt_result = $stmt-> get_result();

    if ($stmt_result->num_rows >0) {
        $data = $stmt_result -> fetch_assoc();
        if ($data['email'] == $email and $data['password'] == $password) {
            header("Location:class.html");
        }
        else{
            echo "Invalid email or password";
        }
       
    }
    else{
        echo "Invalid email or password";
    }
}
?>