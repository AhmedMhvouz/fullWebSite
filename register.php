<?php require_once 'inc/nav.php'; ?>
<?php require_once 'inc/connect.php'; ?>



<form method="POST">
    <div class="mb-3">
        <label class="form-label">name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button name="register" class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST['register'])){

    $checkEmail=$_POST['username'];
    $sql="SELECT * FROM user WHERE username='$checkEmail'";

    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)) {

    $count = mysqli_num_rows($result);
        
    }
    if ($count > 0) {
        echo "موجود ";
    }
    else{
        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="INSERT INTO user (name,username,password,role) VALUES ('$name','$username','$password','user')";
        mysqli_query($con,$query);
    }
    


}

?>


<?php require_once 'inc/foot.php'; ?>