<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container2">

    <button class ="btn btn-primary my-5"><a href="index.php"
      class ="text-light" > Add User</a></button>
    </div>
<div class="dtable">

    <table class="table" border="2px solid black;">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Place</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php
include("config.php");

 $sql = "select * from cruddata";
 $result = mysqli_query($conn,$sql);
 $num =1;
 if($result){
   while( $row = mysqli_fetch_assoc($result))
   {
     $id = $row['id'];
     $name = $row['name'];
     $email = $row['email'];
     $mobile = $row['mobile'];
     $place = $row['place'];    

     echo ' <tr>
      <th scope="row">'.$num.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$place.'</td>
       <td> <button class = "btn btn-primary"><a href ="update.php? updateid='.$id.'"class ="text-light" >Update</a></button>
      <button class = "btn btn-danger"><a href ="delete.php? deleteid='.$id.'"class ="text-light">Delete</a></button>

       </td>
    </tr>';
    $num++;
 }
}







?>




   
  </tbody>
</table>
</div>
</body>
</html>