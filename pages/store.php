<?php
include('../database/session.php') 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link rel="stylesheet" href="../style/sstyle.css">
<style>

input{
border:none;
padding: 5px;
}
.sub{
margin: 25px 0;
padding: 10px;
border-radius:5px;
}

</style>
	</head>
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
<?php
if (isset($_POST['sid'],$_POST['sname'],$_POST['address'])){
	$id = mysqli_real_escape_string($conn,$_POST['sid']);
	$fname = mysqli_real_escape_string($conn,$_POST['sname']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$img =  $_FILES["res_img"]["name"];
	echo "<h1>$img</h1>";
	$sql = " insert into store(sid,sname,address,img) values($id,'$fname','$address','$img')";

	mysqli_query($conn,$sql);
	move_uploaded_file($_FILES["res_img"]["tmp_name"],"./img/".$_FILES["res_img"]['name']);
	header("Location: ../pages/store.php");
}
?>

<?php
require('../database/db_connect.php');
$sql = 'SELECT * from store';
$result = mysqli_query($conn,$sql);
$datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php 
if(isset($_POST['delete_store'])){
	$storeid = mysqli_real_escape_string($conn,$_POST['delete_store']);
	$sql = "delete from store where sid = $storeid";
	$result = mysqli_query($conn,$sql);
	header("Location: ../pages/store.php");
}
?>
	<h1 class="add">Add Store</h1>
	<form action="store.php" class="feo" method="POST" enctype="multipart/form-data">
	<div class="page">
	<label for="sid">store id</label><br>
	<input type="number" name="sid"><br>
	<label for="sname">Store Name</label><br>
	<input type="text" name="sname"><br>
	<label for="address">address</label><br>
	<input type="text" name="address"><br>
	<br>
	<label for="res_img">images</label>
	<input type="file" name="res_img">
	<br>
	<input class="sub" type="submit" value="Submit">
	<br>
	</div>
	</form>   




















	<div class="container">
	<table class="content-table">
	<thead>
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>Address</th>
	<th>Edit</th>
	</tr>
	<tbody>
<?php foreach($datas as $data){ 
?>
	<tr>
	<td><?php  echo $data['sid']?></td>
	<td><?php  echo $data['sname']?></td>
	<td><?php  echo $data['address']?></td>
	<td>
	<form action="store.php" method="POST" >
	<button type="submit" name="delete_store" value="<?= $data['sid'];?>" class="btn btn-danger">Delete</button>
	</form>
	</td>

	</tr>
	<?php  }?>

	</tbody>
	</thead>
	</table>
	</div>

	</div>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>
	</html>
