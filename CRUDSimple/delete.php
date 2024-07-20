<?php
include("config.php");

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql = "delete from cruddata where id ='$id'";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo"<script>alert('Data Deleted Successfully !!');</script>";
        header("location:display.php");
    }
    else{
        echo "<script>alert('Failed to Delete Data !!');</script>";
    }
}




?>