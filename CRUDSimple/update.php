<?php

include("config.php");
$id = $_GET['updateid'];
//to display already filled data while updating
$sql2 = "select * from cruddata where id ='$id'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$name = $row2['name'];
$email = $row2['email'];
$mobile = $row2['mobile'];
$place = $row2['place'];

if(isset($_POST['name']))
{

$name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $place = $_POST['place'];

  $sql = "update cruddata set id = '$id', name ='$name', email ='$email', mobile = '$mobile' , place = '$place'
  where id = $id";
  $result = mysqli_query($conn, $sql);

  if($result){  
    echo "Data Updated Successfully";
    header("location: display.php");
  

}
else{
  //die(mysqli_error($conn));
echo "Error while Updating";
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
    <title>Update Details</title>
  </head>
  <body>
  <h1 align ="center">Update Details</h1>
   
<div class="container3">
 
<form method="POST" action ="">

  <div class="form-group ">
     <label for="name">Name </label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name = "name" value =<?php
    echo $name?>>
    
  </div>
  
  <div class="form-group ">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name ="email"
    value =<?php echo $email?>>
    
  </div>
  <div class="form-group ">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" id="mobile" placeholder="mobile" name = "mobile" value =<?php echo $mobile?>>
  </div>
  
  <div class="form-group ">
    <label for="place">place</label>
    <input type="text" class="form-control" id="place" placeholder="place" name ="place"value =<?php echo $place?>>
  </div>
  <button type="submit" id = "submit-id" >Update</button>
</form>

</div>
</div>
  </body>
</html>