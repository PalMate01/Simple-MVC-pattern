<?php
// Waiting for POST users or advs request
// You have "users" or "advs" request
if (isset($_POST['users']) || isset($_POST['advs'])) {
  // Call method
  function call($controller, $action){
    //-->[+]
    require_once("Controller/$controller.php");
    require_once("Model/$controller.php");

    // Inheritance
    // (User = new User)
    // User -> all();
    $controller = new $controller;
    $controller -> {$action}();
  }

  //Store controllers, methods in array
  $controllers = array('User' => ['all'], 'Adv' => ['all', 'allFromUser']);

  // The controller is exists?
  if (array_key_exists($controller, $controllers)) {
    //The method is exists?
      if (in_array($action, $controllers[$controller])) {

        // Call the call method with params
        call($controller, $action);
      } else {

        // Call error
        call('ErrorHandler', 'error');
      }
  } else {

    // Call Error
    call('ErrorHandler', 'error');
  }
}
else{
  // You no have "users" or "advs" request
  //call the home page Controller
  include 'Controller/start.php';
  Start::all();
}
?>