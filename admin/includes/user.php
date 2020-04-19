<?php

    class User{


        public static function findUsers(){

         return self::findByQuery("SELECT * FROM users");

        }


        public static function findUsersById($id){

            
            $result = self::findByQuery("SELECT * FROM users WHERE id = $id LIMIT 1");
            
            $found= mysqli_fetch_array($result);



            return $found;
        }

        public static function findByQuery($sql){
            global $database;
            
            $result = $database->query($sql);

            return $result;
        }

        

    }