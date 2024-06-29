<?php

session_start();
if(isset($_SESSION['id']))
{
    echo $_SESSION['id'];
}
else{
    echo "error in the session";
    header("location: ../login.php")  ;
}



?>





<?php
include"header.php";
?>
<div class ="admintitle"align ="center" >
<h1>Welcome To Admin Dashboard</h1>
<h3 align ="right" style="margin-right:20px;"><a href ="../logout.php">Log Out</a></h3>
</div>

<div class="dash">

<table style ="width:50%";  align ="center">
    <tr>
        <td>1.</td><td><a href ="addstudent.php">Add Student Details</a></td>
    </tr>

    <tr>
        <td>2.</td><td><a href ="updatestudent.php">Update Student Details</a></td>
    </tr>

    <tr>
        <td>3.</td><td><a href ="deletestudent.php">Delete Student Details</a></td>
    </tr>
</table>



</div>
    
</body>
</html>

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
include "../dbconfig.php";
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
      
       <td> <button class ="update" >Update</button>
      <button class = "delete">Delete</button>

       </td>
    </tr>';
   }
}