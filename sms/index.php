<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
<h3 align ="right" style = "margin-right:20px;"><a href="login.php">Admin Login</a></h3>

<h1 align ="center"> Welcome to Student Management System</h1>
<form action="" method  ="post">
<table style="width:30%;" align="center" border="1">
    <tr>
        <td colspan ="2" align="center">Student Information</td>
    </tr>
    <tr>
        <td align ="left">Choose Standard</td>
        <td>
            <select >
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>

            </select>
        </td>
    </tr>
    <tr>
        <td align ="left">Enter Roll NO</td>
        <td>
            <input type="text" name="roll no" placeholder ="Enter roll no" required>
        </td>
    </tr>
    <tr>
        <td colspan ="2"align ="center"> <input type="submit" name ="submit"></td>
    </tr>
</table>

</form>
    
</body>
</html>