<?php 
    include("../headers/header.php")
    
?>

<div class="container">
    <form action="" method="POST">
        <label for="username">Username : </label>
        <input type="text" name="userName" id="" class="form-control"><br>

        <label for="email">Email : </label>
        <input type="email" name="userEmail" id="" class="form-control"><br>

        <label for="password">Password : </label>
        <input type="password" name="userPwd" id="" class="form-control"><br>

        <label for="repeat_pass">Repeat Password : </label>
        <input type="password" name="pwdRepeat" id="" class="form-control"><br>

        <input type="reset" value="Clear" class="btn btn-secondary">
        <input type="submit" value="SignUp" name="signup" class="btn btn-success">

    </form>
</div>