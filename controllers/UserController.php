<?php   

    include("../models/UserModel.php");
    include("../includes/session.inc.php");

    class UserController {

        private $modelUser;

        public function __construct(){
            $this->modelUser = new UserModel;
        }

        public function register(){
            //filter data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //inputs as array
            $data_array = [
                'userName' => trim($_POST['userName']),
                'userEmail' => trim($_POST['userEmail']),
                'userUid' => trim($_POST['userUid']),
                'userPwd' => trim($_POST['userPwd']),
                'repeatPwd' => trim($_POST['pwdRepeat'])
            ];

            //user input Validate

            if(empty($data_array['userName']) || empty($data_array['userEmail']) || empty($data_array['userUid']) || empty($data_array['userPwd']) || empty($data_array['repeatPwd'])) {
                ViewError("register", "Inputs Are Empty...!");
                redirect("../view/signup.php");
            }
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