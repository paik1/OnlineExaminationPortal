<?php
include("class/users.php");
$register = new users;
extract($_POST);
$img_name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
$dup = "select * from signup where email='$e'";
if($register->duplicate($dup))
{
    $register->url("index.php?message=alreadyexists");
}
else
{
    move_uploaded_file($tmp_name,"img/$img_name");
    $query = "insert into signup values ('','$n','$e','$p','$img_name')";

    if($register->signup($query))
    {
        $register->url("index.php?run=success");
    } 
}

?>