<?php
$host = "portfolio-db.cboai7pfpepy.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "adminadmin";
$database = "loginData";

//connection

$con = mysqli_connect($host, $username, $password, $database);

// check connection
if (!$con) {
    die("database not connected");
}
else{
    echo 'Success';
}
?>