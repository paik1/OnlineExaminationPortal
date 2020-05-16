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
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="style2.css">
</head> 
<body>
<div class="header">
    <h1> <span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
 </div>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"> <span>H</span>ome</a></li>
    <li><a data-toggle="tab" href="#menu1"><span>U</span>ser <span>P</span>rofile</a></li>
    <li><a data-toggle="tab" href="#menu2"><span>M</span>enu 2</a></li>
    <li style="float:right;" class="logout"><a data-toggle="tab" href="#menu3">Logout</a></li>
  </ul>

  <div class="tab-content"> 
    <div id="home" class="tab-pane fade in active">
      <p class="line"></p>
      <h3> <span>H</span>OME</h3>
      <center><button type="button" class="btn btn-primary select-sub" data-toggle="tab" href="#select">Click here to start your Exam</button></center>
       <div class="col-sm-4"></div>
       <div class="col-sm-4"><br>
            <div id="select" class="tab-pane fade">
                <form method="post" action="qus_show.php">
                        <select class="form-control" id="" name="cat">
                            <option>Select your Exam</option>
                            <?php
                            $profile->cat_shows();
                            foreach($profile->cat as $category)
                            { ?>
                            <option value="<?php echo $category['id'] ?>"><?php echo $category['cat_name']; ?></option>
                            <?php } ?>
                        </select><br>
                        <center><input type="submit" value="start" class="btn btn-primary submit-btn"><i class="fas fa-play" style="color:crimson"></i></center>
                </form>
            
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <p class="line"></p>
      <h3> <span>W</span>elcome <span>U</span>ser</h3>
      <table class="table">
    <thead>
      <tr>
        <th><span>I</span> Id</th>
        <th><span>I</span> Name</th>
        <th><span>I</span> Email</th>
        <th><span>I</span> Photo</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach($profile->data as $prof)
        {?>

          
                <td><?php echo $prof['id']; ?></td>
                <td><?php echo $prof['name']; ?></td>
                <td><?php echo $prof['email']; ?></td>
                <td><img src="<?php echo $prof['img']; ?>" alt="<?php echo $prof['name']; ?> image" width=100px height=100px></td>
            </tr>  <tr>
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
