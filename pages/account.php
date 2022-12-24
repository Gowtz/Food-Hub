<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/sstyle.css">
</head>
<style>
    .con{
    width: 100%;
    height: 100vh;   
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .cc{
    text-align: center;
    }
    .cc img{
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
</style>

<?php
require('../database/db_connect.php');



$sql = "SELECT * from user where usrname = 'admin'";
$result = mysqli_query($conn,$sql);
$datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
$data = $datas[0];
// print_r($data);
?>

<body>
    <div class="side-bar">
        <ul>
            <a href="../"><li class="tabs">HOME</li></a>
            <a href="../backend.php"><li class="tabs">Dashboard</li></a>
            <a href="./store.php"><li class="tabs">Stores</li></a>
            <a href="./food.php"><li class="tabs">Foods</li></a>
            <a href="./account.php"><li class="tabs">Account Info</li></a>
            <a href="../database/logout.php"><li class="tabs">Logout</li></a>
        </ul>
        
    </div>
    <div class="Content">
       
     <div class="con">
        <div class="cc">
            <img src="../img/unnamed.jpg" alt="">
             <p><b>fname:</b> <i><?php 
             echo  $data['fname']?>
             </p> 
             </i>
     <p><b>lname:</b> <i><?php echo $data['lname']?></i></p> 
            <p><?php echo $data['email']?></p>  


        </div>
     </div>

    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>
</html>