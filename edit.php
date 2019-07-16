<?php
include ('conn.php'); 
if(isset($_POST['update'])){

    $id = $_GET['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $location= $_POST['location'];
    
    $sql = "UPDATE users SET 
           
            `first_name`='$first_name', 
             `last_name`='$last_name',  
             `mobile_no`='$mobile_no', 
             `email`='$email', `age`='$age', 
    `location`='$location' WHERE  `id`= $id ";

    $query = mysqli_query($conn, $sql);
    header('location:display.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
</head>
<body>
    
    <div class="col-lg-6 m-auto">
        <form action="" method="post">
           <br><br><div class="card">
               <div class="card-header bg-dark">
                   <h1 class="text-white text-center">Update Record</h1>
               </div>
               <br>
               <label for="first_name">First Name</label>
               <input type="text" name="first_name"  class="form-control" placeholder="Enter First Name"><br>
               <label for="last_name">Last Name</label>
               <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name"><br>
               <label for="Mobile Number">Mobile Number</label>
               <input type="number" name="mobile_no" class="form-control" placeholder="Enter Mobile Number"><br>
               <label for="email">E-Mail</label>
               <input type="email" name="email" class="form-control" placeholder="Enter E-Mail"><br>
               <label for="Age">Age</label>
               <input type="number" name="age" class="form-control" placeholder="Enter Your Age"><br>
               <label for="Location">Location</label>
               <input type="text" name="location" class="form-control" placeholder="Enter Your Address / Location"><br>

               <button type="submit" name="update" value="submit" class="btn btn-success">UPDATE</button>
 
           </div> 
        </form>
    </div>

<script src="bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>