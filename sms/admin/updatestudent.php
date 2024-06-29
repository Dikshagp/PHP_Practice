<?php

session_start();
if(isset($_SESSION['id']))
{
    echo $_SESSION['id'];
}
else{
    echo "error in the session";
    header("location: ./login.php")  ;
}



?>

<?php
include"header.php";
include"title.php";

include("../dbconfig.php");
?>

<body>
    <div class="updatecontainer">


    <table align ="center" border="1" style="width: 50%;"  >
  <thead>
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">contact_no</th>
      
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php
  $sql = "select * from student";
$result = mysqli_query($conn,$sql);


 if($result){
   while( $row = mysqli_fetch_assoc($result))
   {
    $id = $row['id'];
     $rollno = $row['roll_no'];
     $name = $row['name'];
     $city = $row['city'];
     $contact_no = $row['contact_no'];
        

     echo ' <tr>
      <th scope="row">'.$rollno.'</th>
      <td>'.$name.'</td>
      <td>'.$city.'</td>
      <td>'.$contact_no.'</td>
      
       <td> <button class ="update" ><a href = "updatedata.php? updateid='.$id.'"class">Update</a></button>
      <button class = "delete"><a href = "deletestudent.php? deleteid='.$id.'">Delete</a></button>

       </td>
    </tr>';
 }
}


