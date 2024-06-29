<?php

include("../dbconfig.php");

$id = $_GET['updateid'];


if(isset($_POST['roll_no']))
{
$rollno =$_POST['roll_no'];
$name = $_POST['name'];
  $city = $_POST['city'];
  $contact_no = $_POST['contact_no'];
  

  $sql = "update student set  name ='$name', city ='$city', contact_no = '$contact_no'
  where id =$id";
  $result = mysqli_query($conn, $sql);

  if($result){  
    echo "Data Updated Successfully";
    header("location: updatestudent.php");
  

}
else{
  //die(mysqli_error($conn));
echo "Error while Updating";
}
}







?>

<?php
include("title.php");
include("header.php");

?>
   

<form method="POST" action ="">

  <div class="form-group ">
  <label for="rollno">rollno </label>
    <input type="text" class="form-control" id="roll_no" aria-describedby="emailHelp" placeholder="Enter roll no" name = "roll_no"  >
</div>
<br/><br/>
<div class="form-group">
     <label for="name">Name </label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name = "name" >
    
  </div>
  <br/><br/>
  <div class="form-group ">
    <label for="city">city</label>
    <input type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Enter city" name ="city">
    
  </div>
  <br/><br/>
  <div class="form-group ">
    <label for="contact_no">contact_no</label>
    <input type="text" class="form-control" id="contact_no" placeholder="contact_no" name = "contact_no" >
  </div>
  <br/><br/>
  </div>
 
  <button type="submit" id = "update" >Update</button>
</form>


 
  </body>
</html>