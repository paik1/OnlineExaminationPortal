<?php

include("class/users.php");
$qus = new users;
$cat = $_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat'] = $cat;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
      function timeout()
            {
                var hours = Math.floor(timeLeft/3600);
                var minute = Math.floor((timeLeft-(hours*60*60)-30)/60);
                var second = timeLeft%60;
                var hrs = checktime(hours);
                var mint = checktime(minute);
                var sec = checktime(second);
                if(timeLeft<=0)
                {
                    clearTimeout(tm);
                    document.getElementById("form1").submit();
                }
                else
                {
                    document.getElementById("time").innerHTML= hrs+":"+mint+":"+sec;
                }
                timeLeft--;
                var tm = setTimeout(function(){timeout()},1000)
            }
            function checktime(msg)
            {
                if(msg<10)
                {
                    msg = "0"+msg;
                }
                return msg;
            }
  </script>
</head>
<body onload="timeout()">

<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
  <h2>Your exam has started 
  <script type="text/javascript">
    var timeLeft=2*60;
  </script>
  
  <div id="time" style="float:right;">timeout</div></h2> 
  <form id="form1" action="ans.php" method="post"> 
  <?php 
  $i = 1;
  foreach($qus->question as $qstn) {?>                
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th><?php echo $i; ?>.&emsp;<?php echo $qstn['question'] ?></th>
      </tr>
    </thead>
    <tbody>


        <?php if(isset($qstn['ans1'])) {?>
      <tr class="info">
        <td>&nbsp;i  &emsp;<input type="radio" value="0" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans1']; ?></td>
      </tr>
        <?php } ?>


      <?php if(isset($qstn['ans2'])) {?>
      <tr class="info">
        <td>&nbsp;ii &emsp;<input type="radio" value="1" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans2'] ?></td>
      </tr>
      <?php } ?>


      <?php if(isset($qstn['ans3'])) {?>
      <tr class="info">
        <td>&nbsp;iii&emsp;<input type="radio" value="2" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans3'] ?></td>
      </tr>
      <?php } ?>


      <?php if(isset($qstn['ans4'])) {?>
      <tr class="info">
        <td>&nbsp;iv &emsp;<input type="radio" value="3" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans4'] ?></td>
      </tr>
      <?php } ?>

      <tr class="info">
        <td><input type="radio" checked="checked" style="display:none;" value="no_attempt" name="<?php echo $qstn['id']; ?>"></td>
      </tr>


    </tbody>
  </table>
  <?php $i++; } ?>
  <center><input type="submit" value="Submit Exam" class="btn btn-success"></center>
  </form>
  </div>
  <div class="col-sm-2"></div>

</div>

</body>
</html>



