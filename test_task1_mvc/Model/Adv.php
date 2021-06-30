<?php
// 9. station
class Adv_model{

    // declare variable
    public $id;
    public $user_id;
    public $title;
    public $name;

    // make constructor
    public function __construct($id, $user_id, $title, $name)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->title = $title;
        $this->name = $name;
    }

    //list of all advertiserments
    public static function getAll(){
        
        require_once('Model/appService.php');
        // return the AppService class, getAllAdv method values
        return AppService::getAllAdv();
    }
}

?>