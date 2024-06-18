<?php
$host ="localhost";
$username= "root";
$password =NULL;


$conn = new PDO("mysql:host =$host; dbname=Users", $username, $password);
 $connected = $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($connected)
// {
 // echo"connection establish";

 //}




?>