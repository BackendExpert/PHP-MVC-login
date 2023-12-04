<?php 

    session_start();

    echo $_SESSION['usersId'];

    

?>

<?php if(!isset($_SESSION['userName'])) : ?>
            <a href="login.php"><button class="btn btn-primary">Login</button></a>
            <a href="signup.php"><button class="btn btn-success">Register</button></a>
        <?php else : ?>
            <a href="../controllers/UserController.php?x=logout"><button class="btn btn-danger">Logout</button></a>
        <?php endif;?>