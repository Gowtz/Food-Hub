<?php

session_start();
$name = $_SESSION['login_user'] ?? "login";

if($name == 'login'){
  header("Location: log.php");
}

require('./database/db_connect.php');

if(isset($_POST['boo'])){
  $date=$_POST['date'];
  if(!isset($_POST['table_name'])){
    $table_name=null;
    }
    else{
    $table_name=$_POST['table_name'];
    echo "Table Booked on \t ". $date ."\tTable For\t".$table_name."\t\tBy\t\t".$name; 
    }  

$sql = "insert into trans(tid,cname,datt) values($table_name,'$name','$date')";
mysqli_query($conn,$sql);
}
?>