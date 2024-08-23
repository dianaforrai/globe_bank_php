<?php

  require_once('db_credentials.php');

  $mysqli = new mysqli("localhost", "username", "password", "database"); 
   if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

  function confirm_db_connect() {
    if(mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  function confirm_result_set($result_set) {
    if (!$result_set) {
    	exit("Database query failed.");
    }
  }

?>
