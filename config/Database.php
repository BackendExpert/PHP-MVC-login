<?php 
    class Database { 
        private $host = "localhost";
        private $user = "user";
        private $pass = "";
        private $db_name = "mvc_login_tb";

        //PDO objects

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            //set Data source name DSN
            $dsn = 'mysql:host=' . $this->host. ';dbname='.$this->db_name;
            
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass);
            }catch (PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }        
        }

        
    }


?>