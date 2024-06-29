<?php


include("dbconfig.php");

if(isset($_POST["login"]))
{
 $username =$_POST['username'];
 $password =$_POST['password'];

 $sql = "select * from admin  where username ='$username' AND password ='$password'";
 $result = mysqli_query($conn,$sql);

 $row =mysqli_num_rows($result);
 //echo $row;

 if($row <1)
 {
    echo "User does not exits";
   
 }
 else
 {
    $data = mysqli_fetch_assoc($result);
  echo  $id = $data['id'];
    session_start();
    $_SESSION['id'] = $id;
    header("location: admin/admindash.php");

 }

}

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>

    <form action="" method="post">
        <div class="container">
        <center>
        <label for="username">Username:</label>
            <input type="text"  name ="username" placeholder="Enter Username" required>
            <br/><br/>
            <label for="password">password:</label>
            <input type="password" name ="password" placeholder="Enter password" required>
            <br/><br/>
            <button name ="login">Log In</button>
            <button name ="changepassword"><a href ="admin/changepass.php">Forgot password</a></button>
        </center>
        </div>
    </form>
    
</body>
</html>