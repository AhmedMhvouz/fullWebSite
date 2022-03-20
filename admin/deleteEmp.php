<?php

require_once '../inc/connect.php';
$user_id=$_GET['id'];
$sql="delete from user where id='$user_id';";
$resultt=  mysqli_query($con,$sql);
header("location:index.php");
?>