<?php

include("partials/connection.php");


if(isset($_POST['username'])){

    $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hash = password_hash($password, PASSWORD_DEFAULT);
  
  $existsql =$conn->prepare("SELECT * FROM employee WHERE email = '$email'");
  $existsql->execute();
  $count = $existsql->rowCount();
       echo $count;
       if($count > 0)
       {
        echo "User Already exits";
       }
       else{

        $user= $conn->prepare("INSERT INTO employee (`username`,`email`,`password`) VALUES ('$username','$email', '$hash')");
    $result = $user->execute();
    
    if($result){
        echo"Your account is created,You can log in now !! ";

       
      header("location: login.php");
        
    }

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

    <title>SignUp</title>
  </head>
  <body>
  
    <?php require 'partials/navbar.php'; 
    
    ?>
    <div class="container my-5">
    <h1 class = text-center>Sign Up</h1>
    <form method = "post" action ="">

    <div class="form-group">
    <label for="username">UserName</label>
    <input type="text" class="form-control" id="username"name = "username" maxlength="15" placeholder="Enter username">
   
  </div>
  <div class="form-group">
    <label for="InputEmail1">Email address</label>
    <input type="email" class="form-control" id="InputEmail1"name = "email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password"name ="password"maxlength="10" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    </div>
  </body>
</html>

