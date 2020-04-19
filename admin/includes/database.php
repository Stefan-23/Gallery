<?php 
    //require("new_config.php");


    class Database {

        public $connection;

        public function __construct(){

            $this->connectDB();

        }

        public function connectDB(){
            
            $this->connection = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);

            if($this->connection->connect_errno){
                die("Error" . $this->connection->connect_error);
            }
        }

        public function query($sql){

            $result = $this->connection->query($sql);

            $this->confirm_query($result);
            
            return $result;

        }

        private function confirm_query($result){
            if(!$result){
                echo "Query dead" . $this->connection->error;
            }

            return $result;

        }

        public function escape_string($string){
            
            $esc_string= $this->connection->real_escape_string($string);

            return $esc_string;
        }

        public function insert_id(){
            return $this->connection->insert_id;
        }

    }

    $database = new Database();
    


?>