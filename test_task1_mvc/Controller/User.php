<?php
// 8. station
class User{
    function all(){
        //-->[+]
        // Call User_ model class, getAll() method
        $users = User_model::getAll();
        require_once('View/User/index.php'); //-->[P]
        
    }
}

?>