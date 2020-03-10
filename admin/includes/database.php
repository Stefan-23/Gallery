<?php 
    //require("new_config.php");


    class Database {

        public $connection;

        function __construct(){

            $this->connectDB();

        }

        public function connectDB(){
            $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

            if(mysqli_connect_errno()){
                die("Error" . mysqli_error());
            }
        }

        public function query($sql){

            $result = mysqli_query($this->connection,$sql);

        }

        private function confrim_query(){
            if(!$result){
                echo "Query dead";
            }

            return $result;

        }

        public function escape_string($string){
            
            $esc_string=mysqli_real_escape_string($this->connection,$string);
            return $esc_string;
        }



    }

    $database = new Database();
    


?>