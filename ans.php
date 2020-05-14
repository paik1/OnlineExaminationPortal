<?php

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
    <title>Answer</title>
</head>
<body>
    <?php
    $total_qus = $answer['right'] + $answer['wrong'] + $answer['no_answer'];
    $attempt_qus = $answer['right'] + $answer['wrong'];
    ?>

    <div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h2>Results</h2>                       
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
                <td>Right answer</td>
                <td><?php echo $answer['right'];?></td>
            </tr>
            <tr>
                <td>Wrong answer</td>
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
    </div>
    <div class="col-sm-2"></div>  
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>