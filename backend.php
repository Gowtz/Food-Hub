<?php
include('./database/session.php') 
?>
<?php
require('./database/db_connect.php');
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="./style/sstyle.css">

	</head>
	<body>
	<div class="side-bar">
	<ul>
	<a href="./"><li class="tabs">Home</li></a>
	<a href="./backend.php"><li class="tabs">Dashboard</li></a>
	<a href="./pages/store.php"><li class="tabs">Stores</li></a>
	<a href="./pages/food.php"><li class="tabs">Foods</li></a>
	<a href="./pages/account.php"><li class="tabs">Account Info</li></a>
	<a href="./database/logout.php"><li class="tabs">Logout</li></a>
	</ul>
<?php 
// store 
$ssql='select count(*) from store';
$result = mysqli_query($conn,$ssql);
$sdatas = mysqli_fetch_all($result, MYSQLI_ASSOC);
$sdata=$sdatas[0];
// food 
$ssql='select count(*) from food';
$result = mysqli_query($conn,$ssql);
$fdatas = mysqli_fetch_all($result, MYSQLI_ASSOC);
$fdata=$fdatas[0];
// table 
$tsql='select count(*) from cust';
$result = mysqli_query($conn,$tsql);
$tdatas = mysqli_fetch_all($result, MYSQLI_ASSOC);
$tdata=$tdatas[0];
?>
	</div>
	<div class="Content">
	<div class="container">
	<div class="line">
	<a href="./pages/store.php">
	<div class="card">
	<box-icon color="white" name='store' ></box-icon>
	<p> <?= $sdata['count(*)'] ?></p>
	<p>Stores</p>
	</div>
	</a>
	<a href="./pages/food.php">
	<div class="card">
	<box-icon color="white" name='bowl-rice' ></box-icon>
	<p> <?= $fdata['count(*)'] ?></p>
	<p>Foods</p>                
	</div>
	</a>
	<a href="./pages/foos.php">

	<div class="card">
	<box-icon color="white" name='table' ></box-icon>
	<p> <?= $tdata['count(*)'] ?></p>
	<p>People</p>
	</div>
	</a>
	</div>
	</div>
	</div>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


    Add food
<div class="connn">
	<div class="Content"> 
	    <h1 class="add">Add Foods</h1>
	    <form action="./pages/food.php" class="feo" method="POST" enctype="multipart/form-data">
	        <div class="page">
	            <label for="fid">ID</label><br>
	                <input type="number" name="id"><br>
	                <label for="fname">Name</label><br>
	                <input type="text" name="fname"><br>
	                <br>
					<label for="res_img">images</label>
	<input type="file" name="food_img">
<?php
$class_result=mysqli_query($conn,"SELECT `sname`, `sid` FROM `store`");
echo '<select class= "selec" name="store_name">';
echo '<option selected disabled>Select Class</option>';
while($row = mysqli_fetch_array($class_result)){
	// print_r($row);
	$display=$row['sname'];
	$iid = $row['sid'];
	echo '<option value="'.$iid.'">'.$display.'</option>';
    }
    echo'</select>'
?>
                    <br>
                    <input class="sub" type="submit" value="Submit">
                    <br>
            </div>
        </form>
    </div>


    <div class="content">
        <h1 style="text-align:center;">Add store</h1>
    <form action="./pages/store.php" class="feo" method="POST" enctype="multipart/form-data">
    <div class="page">
    <label for="sid">store id</label><br>
    <input type="number" name="sid"><br>
    <label for="sname">Store Name</label><br>
    <input type="text" name="sname"><br>
    <label for="address">address</label><br>
    <input type="text" name="address"><br>
	<label for="res_img">images</label>
	<input type="file" name="res_img">
    <input class="sub" type="submit" value="Submit">
    </div>
</form>   
<br>
    </div>
</div>
</body>
</html>


