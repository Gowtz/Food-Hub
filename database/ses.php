<?php
include('db_connect.php');
if (!isset($_SESSION['login_user'])) {
      header("Location: log.php");
   }
?>