<?php require_once '../inc/nav.php'; ?>
<?php require_once '../inc/connect.php'; ?>


<?php
$dd= "select * from user";
$result=mysqli_query($con,$dd);

while($row= mysqli_fetch_assoc($result)){
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <a href="deleteEmp.php?id= <?php echo $row['id']; ?>"  class="btn btn-primary">delete</a>
                        <a href="update.php?id= <?php echo $row['id'];    ?>" class="btn btn-primary">update</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

?>

<?php require_once '../inc/foot.php'; ?>