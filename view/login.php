<?php 
    include("../headers/header.php");
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
            <label for="Username">Username/Email : </label>
            <input type="text" name="name/email" id="" class="form-control">

            <label for="password">Password : </label>
            <input type="password" name="userPwd" id="" class="form-control">

            <input type="submit" value="Login" name="userLogin" class="btn btn-success">
        </div>
    </div>
</div>