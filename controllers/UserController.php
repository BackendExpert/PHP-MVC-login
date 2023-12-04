<?php   

    class UserController {
        public function register(){

        }
    }

    $init = new UserController;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
        }
    }