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
  <style>
      #menu2{
        position: relative;
      }
  </style>
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
    <h2>Welcome Admin User</h2>
<ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Categories</a></li>
    <li><a data-toggle="tab" href="#menu2">Questions</a></li>
    
  </ul>

  
    <div id="menu1" class="tab-pane fade">
      <h3>Categoires</h3>
      <?php

            $sel_c = "select * from category";

            $run_c = mysqli_query($con, $sel_c);


            while($row_cat1 = mysqli_fetch_array($run_c))
            {
                $cat1 = $row_cat1['cat_name'];
                echo "<p> $cat1 </p><br>";
            }
      ?>

        <h3>Add a category</h3>    
        <form method=post >
            <div class="form-group">
            <input type="text" class="form-control" id="cat" placeholder="Enter a new category" name="cat">
            </div>
            <input type="submit" name="add_cat" value="Add">
        </form>
        <?php

        if(isset($_POST['add_cat'])){

            $cat2 = $_POST['cat'];

            $insert_category = "insert into category (cat_name) values ('$cat2')";

            $insert_cat = mysqli_query($con, $insert_category);
            
            if($insert_cat){
                echo "<script>alert('Category has been inserted')</script>";
                echo "<script>window.open('adminarea.php','_self')</script>";
            }
        
        } 

        ?>
    </div>

    <div id="menu2" class="tab-pane fade">
      <h3>Add a new Question</h3>
      <form method=post >
            <div class="form-group">
            <input type="text" class="form-control"  placeholder="Enter a Question" name="qus">
            
            <input type="text" class="form-control"  placeholder="Enter Option 1" name="ans1">

            <input type="text" class="form-control"  placeholder="Enter Option 2" name="ans2">
            
            <input type="text" class="form-control" placeholder="Enter Option 3" name="ans3">

            <input type="text" class="form-control" placeholder="Enter Option 4" name="ans4">

            <select name="ans" required>
                <option value="0">1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
            </select><br>
            
            <select name="cats" required>
                <?php

                $sel_c1 = "select * from category";

                $run_c1 = mysqli_query($con, $sel_c1);


                while($row_cat2 = mysqli_fetch_array($run_c1))
                {
                    $id3 = $row_cat2['id'];
                    $cat3 = $row_cat2['cat_name'];
                    echo "<option value='$id3'>$cat3</option>";
                }
                ?>
            </select><br>
            <input type="submit" name="add_qus" value="Add Question">

            
            </div>


        </form>
      
    </div>
  </div>
</div>


</body>
</html>



<?php

if(isset($_POST['add_qus'])){

    $qus = $_POST['qus'];
    $ans1 = $_POST['ans1'];
    $ans2 = $_POST['ans2'];
    $ans3 = $_POST['ans3'];
    $ans4 = $_POST['ans4'];
    $ans = $_POST['ans'];
    $cat4 = $_POST['cats'];

    $insert_question = "insert into questions (question,ans1,ans2,ans3,ans4,ans,cat_id) values ('$qus','$ans1','$ans2','$ans3','$ans4','$ans','$cat4')";

    $insert_qus = mysqli_query($con, $insert_question);
    
    if($insert_qus){
        echo "<script>alert('Questions have been added')</script>";
        echo "<script>window.open('','_self')</script>";
    }

} 


?>