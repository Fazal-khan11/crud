
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Contacts</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-warning text-center">My Contact List</h1>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <td> ID </td>
                    <td> First Name </td>
                    <td> Last Name </td>
                    <td> Mobile No </td>
                    <td> E-Mail </td>
                    <td> Age </td>
                    <td> Adsress </td>
                    <td> Update </td>
                    <td> Delete </td>
                </tr>
                <?php
include ('conn.php');

   

$sql =  "select * from users ";

$query = mysqli_query($conn,$sql);

  while($result = mysqli_fetch_array($query)){



?>
                <tr class="text-center">
                    <td> <?php echo $result['id']; ?> </td>
                    <td> <?php echo $result['first_name']; ?>  </td>
                    <td> <?php echo $result['last_name']; ?> </td>
                    <td> <?php echo $result['mobile_no']; ?>  </td>
                    <td> <?php echo $result['email']; ?>  </td>
                    <td> <?php echo $result['age']; ?>  </td>
                    <td> <?php echo $result['location']; ?>  </td>
                    <td> <button class="btn btn-primary"> <a href="edit.php?id=<?php echo $result['id']; ?>" class="text-white"> Edit </a> </button>  </td>
                    <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white"> Delete </a>  </button> </td>
                </tr>
                <?php
}
                ?>
            </table>
        </div>
    </div>
<script src="bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>