<?php 
    include("../headers/header.php");
?>

<div class="container">
    <h1 class="text-center">Welcome, <?php
        if(isset($_SESSION['usersId'])){
            echo explode(" ", $_SESSION['userName'])[0];
        }else{
            echo "To System";
        }
    
    ?></h1>
    <hr>
    <div class="text-center">
        <a href="login.php"><button class="btn btn-primary">Login</button></a>
        <a href="signup.php"><button class="btn btn-success">Register</button></a>
    </div>

</div>