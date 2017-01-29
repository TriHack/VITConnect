<?php
 
$host = "localhost";
$db = "attendence"; 
$username = "root";
$pass = "12345";
$mysqli = new mysqli($host,$username,$pass,$db);
if(mysqli_connect_error())
  {
    die('Connect Error ('. mysqli_connect_errno().') '. mysqli_connect_error());
  }

?>