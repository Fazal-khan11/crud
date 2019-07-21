<?php
session_start();
include ('conn.php');

$email = $_POST['email'];
$password = $_POST['password'];

$q = "select * from users where email = '$email' && password = '$password' ";

$reult = mysqli_query($conn, $q);

$num = mysqli_num_rows($reult);
if($num == 1){
   $_SESSION['email'] = $email;
   header('location:display.php');
}
else{
   header('location:login.php');
}
?>
?>