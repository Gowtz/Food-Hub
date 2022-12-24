<?php
$host = 'localhost';
$usr = 'root';
$pass = '';
$db = 'ors';

$conn = mysqli_connect($host,$usr,$pass,$db);
if(!$conn){
    echo "error" . mysqli_connect_error(); 
}

?>