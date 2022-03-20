<?php include('connect.php');?>

<?php

if(isset($_POST['submit'])){
    $one =$_POST["title"];
    $two =$_POST["content"];
    $query="INSERT INTO posts (title,content) VALUES ('$one','$two')";
    mysqli_query($conn,$query);
    header("location:../index.php");
    
}

?>



<form class="row g-3" action="inc/addEmp.php" method="post">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">title</label>
        <input class="form-control" id="inputEmail4" name="title">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">content</label>
        <input class="form-control" id="inputPassword4" name="content">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary" name="submit">share</button>
    </div>
</form>