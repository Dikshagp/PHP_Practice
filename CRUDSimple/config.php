<?php

$host = "localhost";
$username= "root";
$password= null;
$dbname ="simplecrud";

$conn =  mysqli_connect($host, $username, $password,$dbname);

if($conn)
{
    echo "Connection success";
}
else{
    die( "Connection error");
}



?>