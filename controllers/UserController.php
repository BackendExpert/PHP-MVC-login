<?php   

    class UserController {
        public function register(){

        }
    }

    $user = new UserController;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $user->register();
                break;
        }
    }