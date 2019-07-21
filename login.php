<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    <div class="container">
    <br><br>
    <div class="col-lg-6 col-md-6 col-sm-12 m-auto" >
<h2 class="text-center"> Login </h2>
<form action="validation.php" method="post" >
<div class="form-group">
    <label for="username">E-Mail</label>
    <input type="email" name="email" class="form-control">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
</div>

<button class="btn btn-primary"  type="submit" name="login"> Login </button>
<a href="form.php" class="btn btn-success"> Register </a>
</form>
</div>
    </div>
</body>
</html>