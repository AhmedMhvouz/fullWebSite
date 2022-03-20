<?php include('../inc/nav.php');?>
<?php include('../inc/connect.php');?>


<?php
$uid=$_GET['id'];
$dd= "select * from user where id='$uid'";
$result=mysqli_query($con,$dd);
$row= mysqli_fetch_assoc($result);

if(isset($_POST['suubmit'])){
    $tup=$_POST['title'];
    $sql="update user set name='$tup' where id=$uid";
    $resultt=  mysqli_query($con,$sql);
    if($resultt){
        header("location:index.php");
    }

}
echo ' 
<form class="row g-3"  method="POST">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">title</label>
    <input class="form-control" id="inputEmail4" name="title" value=" '.$row['name'].' " >
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary" name="suubmit">share</button>
</div>
</form> 
' ;






?>


