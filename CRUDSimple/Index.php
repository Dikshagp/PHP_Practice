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
    echo "Data Inserted Successfully";
    header("location: display.php");
  

}
else{
  //die(mysqli_error($conn));
echo "Error while inserting";
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

    <title>SimpleCrud</title>
  </head>
  <body>
    <h3>Choose Language</h3>
    <select >
    <option value="select">Select Language</option>
      <option value="EN">English</option>
      <option value="JP">Japanese</option>
    </select>
  <form method="POST" action ="">

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
  </div>
  <div class="form-group ">
    <label for="place">place</label>
    <input type="text" class="form-control" id="place" placeholder="place" name ="place">
  </div>
  <button type="submit" id = "submit-id" >Submit</button>
</form>


 
  </body>
</html>
<?php







?>