<?php

    class User{


        public static function find_users(){

            global $database;

            $result_set = $database->query("SELECT * FROM users");

            return $result_set;


        }
        public static function findUsersById($id){

            global $database;

            $result= $database->query("SELECT * FROM users WHERE id=$id");
            
            $found= mysqli_fetch_array($result);



            return $found;
        }

        

    }