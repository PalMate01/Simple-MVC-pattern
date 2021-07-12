<?php
class Adv{

    function all(){
        // Call Adv_ model class, getAll() method
        $advs = Adv_model::getAll();
        require_once("Model/Adv.php");
        require_once('View/Adv/index.php');
        
    }

    function allFromUser(){

        // exists get "user_id" request?
        if (isset($_GET['user_id'])) {
            //store in variable
            $user_id = $_GET['user_id'];

            // Call Adv_ model class, getAll() method with param
            $advs = Adv_model::getAll($user_id);
            require_once("Model/Adv.php");

            // Call User_ model class, getAll() method with param
            $users = User_model::getAll($user_id);
            require_once("View/Adv/index.php");
        }
    }
}

?>