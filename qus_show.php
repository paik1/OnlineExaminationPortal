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
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style4.css">
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
<body>

<div class="header">
    <h1> <span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
 </div>

<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <p class="line"></p>
  <h2><span>Y</span>our <span>e</span>xam <span>h</span>as <span>s</span>tarted 
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
        <th><pre> <?php echo  "<span>$i</span>"; ?><span>.&emsp;</span>
        <?php echo $qstn["question"]; ?></pre></th>
      </tr>
    </thead>
    <tbody>
      
    

        <?php if(isset($qstn['ans1'])) {?>
      <tr class="info">
        <td><span>&nbsp;i&emsp;</span> <input type="radio" value="0" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans1']; ?></td>
      </tr>
        <?php } ?>


      <?php if(isset($qstn['ans2'])) {?>
      <tr class="info">
        <td><span>&nbsp;ii&emsp;</span> <input type="radio" value="1" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans2'] ?></td>
      </tr>
      <?php } ?>


      <?php if(isset($qstn['ans3'])) {?>
      <tr class="info">
        <td><span>&nbsp;iii&emsp;</span> <input type="radio" value="2" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans3'] ?></td>
      </tr>
      <?php } ?>


      <?php if(isset($qstn['ans4'])) {?>
      <tr class="info">
        <td><span>&nbsp;iv&emsp;</span>  <input type="radio" value="3" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans4'] ?></td>
      </tr>
      <?php } ?>

      <tr class="info">
        <td><input type="radio" checked="checked" style="display:none !important;" value="no_attempt" name="<?php echo $qstn['id']; ?>"></td>
      </tr>


    </tbody>
  </table>
  <?php $i++; } ?>
  <center><input type="submit" value="Submit" class="btn btn-success submit-btn"></center>
  </form>
  </div>
  <div class="col-sm-2"></div>

</div>

</body>
</html>



