<?php
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
  </div>
</nav>
  
<div class="container">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <center>
        <h3>Admin Login</h3>    
        <form method=post >
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <input type="submit" name="login" value="Login">
        </form>
        
        </center>
    </div>
    <div class="col-sm-4"></div>
</div>


</body>
</html>
<?php

if(isset($_POST['login'])){

    $c_email = $_POST['email'];
    $c_pass = $_POST['pwd'];

    $sel_c = "select * from admin where user='$c_pass' AND pass='$c_email'";

    $run_c = mysqli_query($con, $sel_c);

    $check_customer = mysqli_num_rows($run_c);

    if($check_customer==0){
        echo "<script>alert('Password or email is incorrect. Please try again!')</script>";
        exit();
    }
    else{
        echo "<script>window.open('adminarea.php','_self')</script>";
    }

}
     ?>