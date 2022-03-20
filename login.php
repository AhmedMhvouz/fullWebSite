<?php require_once 'inc/nav.php'; ?>
<?php require_once 'inc/connect.php'; ?>



<form method="POST">
  <div class="mb-3">
    <label  class="form-label">username</label>
    <input type="text" class="form-control"  name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button name="login" class="btn btn-primary">Submit</button>
</form>


<?php

if(isset($_POST['login'])){

    $username=$_POST['username'];
    $sql=" SELECT * FROM user WHERE username= '$username' ";
    $result = mysqli_query($con,$sql);
    
    while ($row = mysqli_fetch_assoc($result)) {

        $count=mysqli_num_rows($result);
        $status=$row['role'];
        
    }
    if ($count > 0) {
        echo "hello";
        session_start();
        $_SESSION['username']=$username;
        if($row['role']=="user"){
            header("location: user/index.php");
        }else if($status=="admin"){
            header("location: admin/index.php");
        }else if($status=="super"){
            header("location: super_admin/index.php");
        }
    }
    else{
        echo "error";
    }
    


}


?>


<?php require_once 'inc/foot.php'; ?>