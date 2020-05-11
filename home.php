<?php


include("class/users.php");
$email = $_SESSION['email'];
$profile =  new users;
$profile->users_profile($email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online Examination Portal</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">User Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li style="float:right;"><a data-toggle="tab" href="#menu3">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <center><button type="button" class="btn btn-primary">Start Exam</button></center>
        <div class="form-group">
            <label for="sel1">Select list:</label>
                <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
        </div>
      
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Welcome User</h3>
      <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach($profile->data as $prof)
        {?>

            <tr>
                <td><?php echo $prof['id']; ?></td>
                <td><?php echo $prof['name']; ?></td>
                <td><?php echo $prof['email']; ?></td>
                <td><img src="img/<?php echo $prof['img']; ?>" alt="<?php echo $prof['name']; ?> image" width=35 height=30></td>
            </tr>
    </tbody>
        <?php }?>
  </table>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
