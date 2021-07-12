<?php

require_once("db.php");

if (isset($_POST['users'])) {  
    // do you have GET "controller" and "action" request?
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        // YES 
        // store request in a variable
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }else{
        // NO
        // Declare
        // go routes.php
        $controller = "User";
        $action = "all";
    }
// you have POST "advs" request
}else if (isset($_POST['advs'])) {
    // do you have GET "controller" and "action" request?
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        // YES 
        // store request in a variable
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }else{
        // NO
        // Declare
        // go routes.php
        $controller = "Adv";
        $action = "all";
    }
}

// Load the routing file
require_once("routes.php");

?>