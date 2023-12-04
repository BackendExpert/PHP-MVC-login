<?php 
    include("../headers/header.php")
    
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
            Sign Up User
        </div>
        <div class="card-body">
            <form action="../controllers/UserController.php" method="POST">
                <input type="hidden" name="type" value="register">
                <label for="username">Username : </label>
                <input type="text" name="userName" id="" class="form-control"><br>

                <label for="email">Email : </label>
                <input type="email" name="userEmail" id="" class="form-control"><br>

                <label for="userUid">UserID : </label>
                <input type="password" name="userUid" id="" class="form-control"><br>

                <label for="password">Password : </label>
                <input type="password" name="userPwd" id="" class="form-control"><br>

                <label for="repeat_pass">Repeat Password : </label>
                <input type="password" name="pwdRepeat" id="" class="form-control"><br>

                <input type="reset" value="Clear" class="btn btn-secondary">
                <input type="submit" value="SignUp" name="signup" class="btn btn-success">
            </form>
        </div>
    </div>

</div>
