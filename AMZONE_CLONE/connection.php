<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

#dATAbase connection
// $host="localhost";
// $user="root";
// $pass="";
// $db="login_form";
$conn=new mysqli('localhost','root','','login_form');
if($conn->connect_error){
    echo "failed to connect DB".$conn->connect_error;
}
else{
    $stmt = $conn->prepare("insert into user(firstName, lastName, email, password)value(?,?,?,?)");
    $stmt->bind_param("ssss",$firstName, $lastName, $email, $password);
    $stmt->execute();
    echo "registration successfully..";
    $stmt->close();
    $conn->close();
}


              

?>

