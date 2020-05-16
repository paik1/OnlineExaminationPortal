<?php
include("includes/db.php");
include("class/users.php");
$ans = new users;
$answer = $ans->answer($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style5.css">
    <title>Answer</title>
</head>
<body>
    <?php
    $total_qus = $answer['right'] + $answer['wrong'] + $answer['no_answer'];
    $attempt_qus = $answer['right'] + $answer['wrong'];
    ?>
    <div class="header">
    <h1> <span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
 </div>
    <div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h2><span>R</span>esults</h2>                       
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Total number of questions</th>
                <th><?php echo $total_qus; ?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Attempted questions</td>
                <td><?php echo $attempt_qus;?></td>
            </tr>
            <tr>
                <td style="color:green">Right answer</td>
                <td><?php echo $answer['right'];?></td>
            </tr>
            <tr>
                <td style="color:crimson">Wrong answer</td>
                <td><?php echo $answer['wrong'];?></td>
            </tr>
            <tr>
                <td>Not attempted</td>
                <td><?php echo $answer['no_answer'];?></td>
            </tr>
            <tr>
                <td>Final Result</td>
                <td><?php 
                $per = ($answer['right']*100)/($total_qus);

                echo $per."%";
                ?></td>
            </tr>
            </tbody>
        </table>
        <center> <a href="home.php"><input type="submit" value="Go back"></a>  </center>
    </div>
    <div class="col-sm-2"></div>  
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php

    $current_date = date("Y-m-d H:i:s");
    $u_mail = $_SESSION['user_email'];
    $u_cat = $_SESSION['cat'];

    $insert_result = "insert into results (email,cat_id,total_qus,per,date) values ('$u_mail','$u_cat','$total_qus','$per','$current_date')";

    $insert_res = mysqli_query($con, $insert_result);

    if($insert_res){
        echo "<script>alert('Your results have been submitted')</script>";
        echo "<script>window.open('','_self')</script>";
    }


?>