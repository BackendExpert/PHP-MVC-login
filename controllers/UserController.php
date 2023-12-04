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

            if(!preg_match("/^[a-zA-Z0-9]*$/", $data_array["userUid"])){
                ViewError("register", "Invalid User ID");
                redirect("../view/signup.php");
            }

            if(!filter_var($data_array['userEmail'], FILTER_VALIDATE_EMAIL)){
                ViewError("register", "Invalid Email Address");
                redirect("../view/signup.php");
            }

            if(strlen($data_array['userPwd']) < 6){
                ViewError("register", "Password Must be more then 6 characters");
                redirect("../view/signup.php");
            }elseif($data_array['userPwd'] !== $data_array['repeatPwd']){
                ViewError("register", "Passwords not match");
                redirect("../view/signup.php");
            }

            //check user already in the db
            if($this->modelUser->emailUsernameFind($data_array['userEmail'],$data_array['userName'])){
                ViewError("register", "User Already Exists");
                redirect("../view/signup.php");
            }

            //hash password
            $data_array['userPwd'] = password_hash($data_array['userPwd'], PASSWORD_DEFAULT);

            //register user
            if($this->modelUser->register($data_array)){
                redirect("../view/login.php");
            }else{
                die("ERROR ....!");
            }
        }
    }

    $user = new UserController;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $user->register();
                break;
            case 'register':
                $user->register();
                break;
        }
    }