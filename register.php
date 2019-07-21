<?php

session_start();
header('location: login.php');
include ('conn.php');
if(isset($_POST['submit'])){
   
$first_name = $_POST['first_name'];
$password = $_POST['password'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$age = $_POST['age'];
$location= $_POST['location'];


    $sql = "INSERT INTO `users` (`first_name`, `password`, `mobile_no`, `email`, `age`, `location`) 
    VALUES ('$first_name', '$password', '$mobile_no', '$email', '$age', '$location')";
    if ($conn->query($sql) === !TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
        echo "New record created successfully";
    }
    
    $conn->close();


}
   


?>