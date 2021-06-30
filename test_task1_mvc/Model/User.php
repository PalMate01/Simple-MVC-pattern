<?php
// 9. station
class User_model{

    // declare variable
    public $id;
    public $name;

    // make constructor
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    //list of all users
    public static function getAll(){

        //-->[+]
        require_once('Model/appService.php');
        // return the AppService class, getAllUser method values
        return AppService::getAllUser(); //-->[P]
        
    }
}

?>