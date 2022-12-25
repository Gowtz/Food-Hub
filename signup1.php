<?php 
require('./database/db_connect.php');

if (isset($_POST["name"],$_POST["usrname"],$_POST["pass"],$_POST["email"]))
{
    $name = $_POST['name'];
    $username=$_POST["usrname"];
    $pass=$_POST["pass"];
    $email =$_POST['email'];

    $sql = " insert into cust(cname,usrname,pass,email) values('$name','$username','$pass','$email')";
    $result = mysqli_query($conn,$sql);

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
    height: 400px;
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

<form action="signup1.php" method="POST">
 <div class="page">
    <label for="name">Name</label>
    <br>
    <input type="text" name="name">
    <br>
    <label for="usrname">USER NAME</label>
    <br>
    <input type="text" name="usrname">
    <br>
    <label for="pass">Password</label>
    <br>
    <input type="text" name="pass">
    <br> 
    <label for="email">Email</label>
    <br>
    <input type="email" name="email">
    <br>
    <input type="submit" class="btn" value="SignIn">
    </div> 
    
</form>
<a href="log.php">Already have a Acount? LogIn</a>
</body>
</html>