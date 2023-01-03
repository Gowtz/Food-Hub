<?php
include('db_connect.php');
session_start();

   if(!isset($_SESSION['login_admin'])){
      header("Location: admin.php");
   }
?>