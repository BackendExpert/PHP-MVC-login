<?php 
    include("../headers/header.php");
    include("../includes/session.inc.php");
?>
<style>
    .card{
        margin: 25px 0;
    }
    .bck-btn{
        margin: 30px 0;
    }
</style>

<div class="container">
    <a href="index.php"><button class="btn btn-primary bck-btn">Back</button></a>
    <div class="card">
        <div class="card-header">
            Login User
        </div>
        <div class="card-body">

        <?php ViewError('login');  ?>
            <form action="../controllers/UserController.php" method="POST">
                <input type="hidden" name="type" value="login">
                <label for="Username">Username/Email : </label>
                <input type="text" name="name/email" id="" class="form-control"><br>

                <label for="password">Password : </label>
                <input type="password" name="userPwd" id="" class="form-control"><br>

                <input type="submit" value="Login" name="userLogin" class="btn btn-success">
            </form>
        </div>
    </div>
</div>