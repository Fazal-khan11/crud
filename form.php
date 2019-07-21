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
        <form action="register.php" method="post">
           <br><br><div class="card container">
           <br><div class="card-header bg-dark">
                   
                   <h1 class="text-white text-center">Add To Contact List</h1>
               </div>
               <br>
               <label for="first_name">Name</label>
               
               <input type="text" name="first_name"  class="form-control" placeholder="Enter Name"><br>
               <label for="last_name">Password</label>
               <input type="password" name="password" class="form-control" placeholder="Enter Password"><br>
               <label for="Mobile Number">Mobile Number</label>
               <input type="number" name="mobile_no" class="form-control" placeholder="Enter Mobile Number"><br>
               <label for="email">E-Mail</label>
               <input type="email" name="email" class="form-control" placeholder="Enter E-Mail"><br>
               <label for="Age">Age</label>
               <input type="number" name="age" class="form-control" placeholder="Enter Your Age"><br>
               <label for="Location">Location</label>
               <input type="text" name="location" class="form-control" placeholder="Enter Your Address / Location"><br>

               <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button><br>
 
           </div> 
        </form>
        <br>
        <button class="btn btn-warning text-center text-white" style="list-style:none"><a href="display.php"> Contact List </a></button>
        <br><br>
    </div>

<script src="bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>