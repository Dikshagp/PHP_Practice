<?php
include("../dbconfig.php");
include("header.php");
include("title.php");


if(isset($_POST['username']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}










?>
<form action="" method ="post">
<body>
    <div class="chgepass">
    <input type="text" name = "username" placeholder = "Enter Username"> <br/><br/>
    <input type="password" name = "new password" placeholder = "Enter new password"> <br/><br/>
    <input type="password" name = "confirm password" placeholder = "confirm password"> <br/><br/>
    <button type ="submit" name="cpass">Reset Password</button>
    </div>
</body>
</form>
</html>



