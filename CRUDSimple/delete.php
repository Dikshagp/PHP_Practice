<?php
include("config.php");

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql = "delete from cruddata where id ='$id'";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo"deleted successfully";
        header("location:display.php");
    }
    else{
        echo "Error While deleting";
    }
}




?>