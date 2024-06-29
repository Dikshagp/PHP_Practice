<?php
include("../dbconfig.php");

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql = "delete from student where id ='$id'";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo"deleted successfully";
        header("location:updatestudent.php");
    }
    else{
        echo "Error While deleting";
    }
}




?>