<?php   

    include("../models/UserModel.php");

    class UserController {

        private $modelUser;

        public function __construct(){
            $this->modelUser = new UserModel;
        }

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