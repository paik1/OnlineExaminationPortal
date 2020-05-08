<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
 <div class="header">
    <h1> <span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
 </div>
 
<div class="container">
    <div class="row">
        <div class="col-sm-6  ">
            <div class="panel panel-danger login">
                <div class="panel-heading login-heading">Login</div>
                    <div class="panel-body">
                        <?php
                            if(isset($_GET['run']) && $_GET['run']=="failed")
                            {
                                echo "Your email or password does not match";
                            }
                        ?>
                        <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
                            <form name="login" onsubmit="return checkLogin()" action="signin_sub.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email"><p class="line0" ></p> Email:</label>
                                <input type="email" class="form-control" id="email0" name="e" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="pwd"><p class="line0"></p>Password:</label>
                                <input type="password" class="form-control" id="pwd0" name="p" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-default" onclick="checkLogin()">Submit</button>
                        </form>
                    </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-danger signup">
                <div class="panel-heading signup-heading">Signup</div>
                    <div class="panel-body">
                            <?php if(isset($_GET['run']) && $_GET['run']=="success") 
                            {
                                echo "User registration successful!";
                            }
                            ?>
                        <!-- <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"> -->
                            <form name="form2" onsubmit="return checkSignup()" method="post" action="signup_sub.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name"><p class="line0"></p>Name:</label>
                                <input type="text" class="form-control" name="n" id="name" placeholder="Enter full name">
                            </div>
                            <div class="form-group">
                                <label for="email"><p class="line0"></p>Email:</label>
                                <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="pwd"><p class="line0"></p>Password:</label>
                                <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="pwd"><p class="line0"></p>Confirm Password:</label>
                                <input type="password" class="form-control" id="confirmPwd" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="file"><p class="line0"></p>Upload your image:</label>
                                <input type="file" class="form-control" name="img" id="file" style="padding: 3px;">
                            </div>
                            <button type="submit" class="btn btn-default" onclick="checkSignup()">Submit</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
