<?php 
    include("../headers/header.php");
?>

<div class="container">
    <h1 class="text-center">Welcome, <?php
        if(isset($_SESSION['userName'])){
            echo explode(" ", $_SESSION['userName'])[0];
        }else{
            echo "To System";
        }
    
    ?></h1>
    <hr>
    <div class="text-center">
        <?php if(!isset($_SESSION['userName'])) : ?>
            <a href="login.php"><button class="btn btn-primary">Login</button></a>
            <a href="signup.php"><button class="btn btn-success">Register</button></a>
        <?php else : ?>
            <a href="../controllers/UserController.php?x=logout"><button class="btn btn-danger">Logout</button></a>
        <?php endif;?>
    </div>

</div>