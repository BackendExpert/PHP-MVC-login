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

        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }

        //bind value to prepared statamet using name parameters

        public function bind($param, $value, $type = null){
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;                    
                }
            }
            $this->stmt->bindValue($parm, $value, $type);
        }
    }


?>