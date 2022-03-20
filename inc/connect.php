<?php


if(! $con= mysqli_connect('localhost','root',''))
{
    exit();
}else{
    
    mysqli_select_db($con,"final");
}

?>