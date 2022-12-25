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
    height: 400px;
    width: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    background-color: #686A6C;
}

label,input{
    padding: 5px;
    margin: 10px;
    border: none;
}
.btn{
    padding: 5px 75px !important;
    background-color: red;
    color:white;
}
a{
    color: blue;
}

</style>
</head>
<body>

<form action="signup1.php" method="POST">
 <div class="page"><B>
    <label for="name">Name</label>
    <br>
    <input type="text" name="name" required placeholder="Enter Name">
    <br>
    <label for="usrname">USER NAME</label>
    <br>
    <input type="text" name="usrname"required placeholder="Enter Username">
    <br>
    <label for="pass">Password</label>
    <br>
    <input type="text" name="pass"required placeholder="Enter Password">
    <br> 
    <label for="email">Email</label>
    <br>
    <input type="email" name="email"required placeholder="Enter Email">
    <br>
    <input type="submit" class="btn" value="SignIn" style="font-weight:bold;border-radius:20px;" >
    <br>
    <br>
    <a href="log.php"><b>Already have a Acount? LogIn</b></a>
    </B>
    </div> 
    
</form>

</body>
</html>