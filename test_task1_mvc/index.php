<?php
// [+] <-- this is a request
// this request would like traveling through the M - V - C pattern

// 1. station
// load the db connection config file
require_once("db.php");

// after the first routing has ended you can use 3 button
// home -> CLICK -> you not have POST request, thus same thing happens as first
// List of Users -> CLICK -> you have POST request = "users"
// List of Advertisements -> CLICK -> you have POST request = "advs"

// We have example a "users" request -->[+]<--

// Waiting for POST users or advs request
// you have POST "users" request
// 6. station
//-->[+]
if (isset($_POST['users'])) {  
    // do you have GET "controller" and "action" request?
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        // YES 
        // store request in a variable
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }else{
        //-->[+]
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