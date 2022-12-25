<?php
   include('db_connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($conn,"select usrname from cust where usrname= '$user_check'");
   $name = $_SESSION['login_user'] ?? "Login";

   
   if(!isset($_SESSION['login_user'])){
      header("Location: log.php");
   }
?>

<form action=""></form>