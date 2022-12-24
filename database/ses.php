<?php
   include('db_connect.php');
   session_start();
   
   
   $ses_sql = mysqli_query($conn,"select userid from admin_login where userid= '$user_check'");
   $name = $_SESSION['login_user'] ?? "Login";

   
   if(!isset($_SESSION['login_user'])){
      header("Location: log.php");
   }
?>

<form action=""></form>