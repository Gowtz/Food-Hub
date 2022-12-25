<?php
require('./database/db_connect.php');
session_start();

if (isset($_POST["usrname"],$_POST["pass"]))
{
    $username=$_POST["usrname"];
    $password=$_POST["pass"];
    $sql = "SELECT uid FROM user WHERE usrname='$username' and pass = '$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1) {
        $_SESSION['login_admin']=$username;
        header("Location: backend.php");
    }else {
        echo '<script language="javascript">';
        echo 'alert("Invalid Username or Password")';
        echo '</script>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    background-color: #1E1E1E ;
}
html{
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
form{
    height: 300px;
    width: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    background-color: rgb(163, 197, 255);
}

label,input{
    padding: 5px;
    margin: 10px;
    border: none;
}
.btn{
    padding: 5px 75px !important;
    background-color:red;
    color:white;
}
</style>
</head>
<body>

<form action="admin.php" method="POST">
 <div class="page"><center>
    <label for="name"><u><b>Admin LOG-IN</b></u></label><br><br>
    <label for="name">Admin</label>
    <br>
    <input type="text" name="usrname" required placeholder="Enter Admin">
    <br>
    <label for="pass">Password</label>
    <br>
    <input type="text" name="pass"required placeholder="Enter Password">
    <br> 
    <input type="submit" class="btn" value="SignIn" style="border-radius:20px;">
    </div>
    </center> 
</form>
