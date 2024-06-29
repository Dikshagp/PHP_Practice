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
include"title.php"
?>
<div class="adds" >

<form action="" method="post"  enctype="multipart/form-data">

<input type="text" name ="roll_no" placeholder = "Enter The Roll No"><br/><br/>
<input type="text" name ="name" placeholder = "Enter The name"><br/><br/>

<input type="text" name ="city" placeholder = "Enter The city"><br/><br/>
<input type="text" name ="contact_no" placeholder = "Enter The contact_no"><br/><br/>

<label for="std">Choose a std:</label>

<select name="std" id="std">
<option >Select Std</option>

  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
  <option value="5">5th</option>
</select><br/><br/>




<input type="file" name ="image"><br/><br/>
<button type="submit" name ="submit">Submit</button>






</form>
</div>

    
</body>
</html>

<?php

include("../dbconfig.php");

if(isset($_POST['submit']))
{
   $rollno = $_POST['roll_no'];
   $name = $_POST['name'];
   $city = $_POST['city'];
   $contactno = $_POST['contact_no'];
   $std = $_POST['std'];
   $imagename =$_FILES['image']['name'];
   $tempname = $_FILES['image']['tmp_name'];

   move_uploaded_file($tempname, "../images/$imagename");



$sql = "INSERT INTO `student`(`roll_no`, `name`, `city`, `contact_no`, `std`, `image` ) 
VALUES ('$rollno','$name','$city','$contactno','$std', '$imagename')";


$result = mysqli_query($conn, $sql);

if($result) 
{
    echo "Data Inserted Successfully";
}
else
{
    echo "error while adding student data";
}


}

?>