<?php
$localhost = "localhost";
$db_username = "root";
$db_password= "";
$db_name = "globe_bank";
 
$con_db = mysqli_connect($hostURL, $db_username, $db_password, $db_name);

if(mysqli_connect_errno()){
    echo "Failed to connect to MySql:".mysqli_connect_errno();
}else{
    echo "Connected to MySQL";
}

?>