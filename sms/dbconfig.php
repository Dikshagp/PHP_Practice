<?php
$host = "localhost";
$username="root";
$password= null;
$dbname= "sms";

$conn =  mysqli_connect($host, $username, $password,$dbname);

if ($conn) {
    echo "Connection success";
}
else{
    die(mysqli_connect_error());
}






?>