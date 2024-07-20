<?php

include "config.php";

SESSION_start();

 if(isset($_POST['username']))
{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from login where username = '$username' AND password = '$password'";
        $result =mysqli_query($conn, $sql);

        $type = mysqli_fetch_array($result);

        if($type["usertype"] == "user")
        {            
        $_SESSION["username"] = $username;
       
       // echo "Logged in success as user";
        header("location:homepage.php");

       }
       elseif($type["usertype"]=="admin")

    
       {  $_SESSION["username"] = $username;
       
       // echo"Logged in as a admin";
        header("location:display.php");
       }
       else{
        echo "Username or password incorrect";
       }
           
        




    }




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    
    
        <h2 align="center">Login</h2>
        <div class = container4>
        <form method ="POST" action="">
        <label>Username</label>
        <input type="text" name = "username" placeholder="Enter Username"required style="height: 30px;" ><br/><br/>
        
        
        <label >Password</label>
        <input type="password" name = "password" placeholder="Enter Password" required style="height: 30px;"><br/><br/>
        
        <button type=" submit"class ="loginbtn"style="height: 25px;" >Log In</button>
    
        

        </form>
        </div>

</body>

</html>

