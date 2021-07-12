<?php
class AppService{

    //List of all Advertisements
    public static function getAllAdv(){
        // Declare a array
        $list = [];
        // store Db class, getDb method values
        $db = Db::getDb();
        // make query
        $result = mysqli_query($db, "SELECT * FROM advertisements, users WHERE users.id = advertisements.user_id");
        // store the results
        while($row = mysqli_fetch_assoc($result)){
            $list[] = new Adv_model($row['id'], $row['user_id'], $row['title'], $row['name']);
        }
        return $list;
    }

    //list of all users
    public static function getAllUser(){
        // Declare a array
        $list = [];
        // store Db class, getDb method values
        $db = Db::getDb();
        // make query
        $result = mysqli_query($db,"SELECT * FROM users");
        // store the results
        while($row = mysqli_fetch_assoc($result)){
            $list[] = new User_model($row['id'], $row['name']);
        }

        return $list;
    }
}
?>