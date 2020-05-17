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
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="adminarea.css">
  
</head>
<body>

<div class="header">
    <h1> <span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
</div>

<center>
<h1>Admin Panel</h1>
</center>


 


<div class="container">
    <center><h2>Welcome Admin User</h2></center>

    <center>
    <button class="btn btn-default" id="btn1"><a data-toggle="tab" href="#menu1">Categories</a></button><br>
    <button class="btn btn-default" id="btn2"><a data-toggle="tab" href="#menu2">Questions</a></button>
    </center>

    <div id="menu1" class="tab-pane fade">
       
        <h3 style="font-family: 'Montserrat', sans-serif;">Add category</h3>    
        <form method =post>
            <div class="form-group">
                <input type="text" class="" id="cat" placeholder="Enter a new category" name="cat">
                <button type="submit" name="add_cat" value="Add" >Add</button>
            <!-- <input type="submit" name="add_cat" value="Add">    -->
            </div>
        </form>

        <h2>Categories</h2>
        <ul id="list">
                <?php

                 $sel_c = "select * from category";

                $run_c = mysqli_query($con, $sel_c);


                while($row_cat1 = mysqli_fetch_array($run_c))
                {
                        $cat1 = $row_cat1['cat_name'];  
                        echo '<li class="listItems">'.$cat1.'</li>';
                }
                    
                ?>
        </ul>
        

        
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
    

    <div id="menu2" class="tab-pane fade" >
     <h3><span>I</span> Add a new Question</h3>
      <form method=post >
            <div class="form-group">
            <input type="text" class="form-control"  placeholder="Enter a Question" name="qus" style="padding:20px; font-size:20px; font-family: 'Hind Siliguri', sans-serif; border:3px solid black">
            <br>
            <input type="text" class="form-control"  placeholder="Enter Option 1" name="ans1" style="padding:20px; font-family: 'Hind Siliguri', sans-serif; margin-top:10px; border:1px solid black">

            <input type="text" class="form-control"  placeholder="Enter Option 2" name="ans2"
            style="padding:20px; font-family: 'Hind Siliguri', sans-serif; margin-top:10px;border:1px solid black">
            
            <input type="text" class="form-control" placeholder="Enter Option 3" name="ans3"
            style="padding:20px; font-family: 'Hind Siliguri', sans-serif; margin-top:10px; border:1px solid black">

            <input type="text" class="form-control" placeholder="Enter Option 4" name="ans4"
            style="padding:20px; font-family: 'Hind Siliguri', sans-serif; margin-top:10px; margin-bottom:20px; border:1px solid black">

            <select name="ans" required>
                <option value="0">1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
            </select>
      
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
            <center><input type="submit" name="add_qus" value="Add Question"></center>

            
            </div>


        </form>
      
    </div>
           
  </div>
  </div>


<script src="script.js"></script>
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