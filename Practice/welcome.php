<?php
session_start();

if(!isset($_SESSION['loggedIn']) || ($_SESSION['loggedIn'])!= true)
{
  header("location: login.php");
  exit;

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

    <title>Welcome  
      <?php   $_SESSION['email'] ?>
    </title>
  </head>
  <body>
  
    <?php require 'partials/navbar.php';  ?>

    <h1>Welcome Page </h1>
   

   <div class="container my-5">
   <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> <?php
   echo $_SESSION['email'] ;?></h4>

  <p> yeah, you successfully logged in to the System !!!.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to Log out of the system.<a href = "logout.php">using this link </a></p>
</div>


   </div>
    
  </body>
</html>