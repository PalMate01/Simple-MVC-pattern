<?php

class Db{

    private static $db;

    public static function getDb(){

        if (!isset(self::$db)) {
            
            self::$db = mysqli_connect("localhost", "root", "", "rabit_task_1");
        }else{
            die("Database connection error!");
        }
        return self::$db;
    }
}


?>