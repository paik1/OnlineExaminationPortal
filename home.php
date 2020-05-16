<?php

include("includes/db.php");
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
  <link rel="stylesheet" href="style3.css">
</head> 
<body>
<div class="header">
    <h1> <span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
 </div>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"> <span>H</span>ome</a></li>
    <li><a data-toggle="tab" href="#menu1"><span>U</span>ser <span>P</span>rofile</a></li>
    <li><a data-toggle="tab" href="#menu2"><span>R</span>esult <span>H</span>istory</a></li>
    
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
                        <center><input type="submit" value="submit" class="btn btn-primary submit-btn"><i class="fas fa-play" style="color:crimson"></i></center>
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

        <tr>
                <td><?php echo $prof['id']; ?></td>
                <td><?php echo $prof['name']; ?></td>
                <td><?php echo $prof['email']; ?></td>
                <td><img src="<?php echo $prof['img']; ?>" alt="<?php echo $prof['name']; ?> image" width=100px height=100px></td>
            </tr>  
    </tbody>
        <?php }?>
  </table>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>All Results</h3>
        <div class="table-responsive">          
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Exam Name</th>
                    <th>Test Date</th>
                    <th>Total Questions</th>
                    <th>Scores Obtained</th>    
                </tr>
                </thead>
                <?php 
                
                $get_result = "select * from results where email='$email'";

                $run_result = mysqli_query($con, $get_result);
                $i = 1;
    
                while($row_result=mysqli_fetch_array($run_result)){
                    
                    
                    $cat_id = $row_result['cat_id'];
                    $total_qus = $row_result['total_qus'];
                    $date = $row_result['date'];
                    $perc = $row_result['per'];   
                    
                    $show_c = "select * from category where id='$cat_id'";
                    $run_c = mysqli_query($con, $show_c);
                    
                    while($row_cate = mysqli_fetch_array($run_c))
                    {
                        $show_cat = $row_cate['cat_name'];
                    }

                    echo "<tbody>
                            <tr>
                                <td>$i</td>
                                <td>$show_cat</td>
                                <td>$date</td>
                                <td>$total_qus</td>
                                <td>$perc%</td>
                            </tr>
                        </tbody>";

                $i++;   
                }
                ?>
                
            </table>
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
        <center>
      <h3>Would you like logout?</h3>

      <button type="button" class="btn btn-danger"><a href="logout.php">Yes</a></button>
      <button type="button" class="btn btn-success"><a href="home.php">No</a></button>
      </center>
      
    </div>
  </div>
</div>

</body>
</html>
