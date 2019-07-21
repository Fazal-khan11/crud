<?php
include ('conn.php'); 
session_start();
if(isset($_GET['id'])){
    $sql ="SELECT * FROM users WHERE id=" .$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}
if(isset($_POST['update'])){

    $id = $_GET['id'];
    $first_name = $_POST['first_name'];
    $password = $_POST['password'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $location= $_POST['location'];
    
    $sql = "UPDATE users SET 
           
            `first_name`='$first_name', 
             `password`='$password',  
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
           <br><br><div class="card container">
              <br> <div class="card-header bg-dark">
                   <h1 class="text-white text-center">Update Record</h1>
               </div>
               <br>
               <label for="first_name">Name</label>
               <input type="text" name="first_name"  class="form-control" placeholder="Enter First Name" value="<?php echo $row['first_name']; ?>" ><br>
               <label for="password">Password</label>
               <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $row['password']; ?>"><br>
               <label for="Mobile Number">Mobile Number</label>
               <input type="number" name="mobile_no" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $row['mobile_no']; ?>"><br>
               <label for="email">E-Mail</label>
               <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" value="<?php echo $row['email']; ?>"><br>
               <label for="Age">Age</label>
               <input type="number" name="age" class="form-control" placeholder="Enter Your Age" value="<?php echo $row['age']; ?>"><br>
               <label for="Location">Location</label>
               <input type="text" name="location" class="form-control" placeholder="Enter Your Address / Location" value="<?php echo $row['location']; ?>"><br>

               <button type="submit" name="update" value="submit" class="btn btn-success" value="<?php echo $row['first_name']; ?>">UPDATE</button><br>
               <a href="display.php" class="btn btn-warning"> CANCEL </a>
               <br>
           </div> 
           <br><br>
        </form>
    </div>

<script>
function update(){
    var x;
    if(confirm("Updated Data Successfully") == true){
        x="update";
    }
}
</script>

<script src="bootstrap4/js/bootstrap.min.js"></script>

</body>
</html>