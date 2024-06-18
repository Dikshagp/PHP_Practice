<?php
include("partials/connection.php");

if(isset($_POST['email']))
{

     $email = $_POST['email'];
  $password = $_POST['password'];

    $user= $conn->prepare("SELECT * FROM employee WHERE email ='$email' ");
    $user->execute();
$count = $user->rowCount();
     echo $count;
     if($count==1)
     {
        
        
        $login = true;

        
       session_start();
         $_SESSION['loggedIn']= true;
         $_SESSION['email']= $email;
           header("location: welcome.php");
      }
      
    else{
      echo"Invalid credentials";
     }
    
  
    }

    





?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>LogIn</title>
  </head>
  <body>
  
    <?php require 'partials/navbar.php';  ?>
    
    <div class="container my-5">
    <h1 class = text-center>Log In</h1>
    <form method = "post" action ="">

  <div class="form-group">
    <label for="InputEmail1">Email address</label>
    <input type="email" class="form-control" id="InputEmail1"name = "email" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password"name ="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    </div>
  </body>
</html>


    
  </body>
</html>