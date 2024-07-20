<?php

include 'config.php';

if(isset($_POST['name']))
{

$name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $place = $_POST['place'];

  $sql = "insert into `cruddata` (name, email,mobile,place) values ('$name', '$email', '$mobile', '$place')";
  $result = mysqli_query($conn, $sql);

  if($result){  
    echo "<script>alert('Data Inserted Successfully !!');</script>";
    header("location: display.php");
  

}
else{
  //die(mysqli_error($conn));
echo "<script>alert('Failed To Insert Data !!');</script>";
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
    <link rel="stylesheet" href="style.css">
    <title>SimpleCrud</title>
  </head>
  <body>
    
  <form method="POST" action ="">
    <h1 align="center">CRUD</h1>
    <div class="container">

  <div class="form-group ">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name = "name">
    
  </div>
  <div class="form-group ">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name ="email">
    
  </div>
  <div class="form-group ">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" id="mobile" placeholder="mobile" name = "mobile">
  </div>
  
  <div class="form-group ">
    <label for="place">place</label>
    <input type="text" class="form-control" id="place" placeholder="place" name ="place">
  </div>
  <button type="submit" id = "submit-id" style="background-color: #17a2b8;">Submit</button>
  <button type="submit" id = "bck" name ="back"style="background-color: #17a2b8;">Back</button>
</form>
</div>
</div>



  </body>
</html>

<?php
if(isset($_POST['back'])){
  header("location:display.php");
}






?>