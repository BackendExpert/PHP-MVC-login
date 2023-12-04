<?php 

    include("../config/Database.php");

    class UserModel {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        //find user by email or username

        public function emailUsernameFind($email, $username){
            $this->db->query("SELECT * FROM user_tbl WHERE userName = :username OR userEmail = :email");
            $this->db->bind(':username', $username);
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return  false;
            }
        }

        //register User

        public function register($data){
            $this->db->query("INSERT INTO user_tbl (userName,userEmail,userUid,userPwd)VALUES(:name, :email, :Uid, :password)");
            //bind values

            $this->db->bind(':name', $data['userName']);
            $this->db->bind(':email', $data['userEmail']);
            $this->db->bind(':Uid', $data['userUid']);
            $this->db->bind(':password', $data['userPwd']);

            //execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }