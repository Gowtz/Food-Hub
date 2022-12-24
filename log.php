<?php
require('./database/db_connect.php');
session_start();

if (isset($_POST["usrname"],$_POST["pass"]))
{
    $username=$_POST["usrname"];
    $password=$_POST["pass"];

    $sql = "SELECT cid FROM cust WHERE usrname='$username' and pass = '$password' ";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    print_r($count);

    if($count==1) {
        $_SESSION['login_user']=$username;
        header("Location: user.php");
    }
    else {
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
    text-align:center;
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
    background-color: rgb(255, 143, 121);
}
</style>
</head>
<body>

<form action="log.php" method="POST">
 <div class="page">
    <label for="name">USER NAME</label>
    <br>
    <input type="text" name="usrname">
    <br>
    <label for="pass">Password</label>
    <br>
    <input type="text" name="pass">
    <br> 
    <input type="submit" class="btn" value="SignIn">
    </div> 

</form>
<a href="signup.php">Dont have an account</a>

