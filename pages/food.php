<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/sstyle.css">

    <style>


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
<?php
include('../database/session.php') 
?>
 

<!-- insert data  -->
<?php
if (isset($_POST['id'],$_POST['fname'])){
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $fname = mysqli_real_escape_string($conn,$_POST['fname']); 
    $img =  $_FILES["food_img"]["name"];
//  echo $img;
    if(!isset($_POST['store_name'])){
    $store_name=null;
    }
    else{
    $store_name=$_POST['store_name'];}

    print_r($store_name);
    $sql = "insert into food(fid,fname,sid,food_img) values($id,'$fname',$store_name,'$img')";
    mysqli_query($conn,$sql);
    $moved = move_uploaded_file($_FILES["food_img"]["tmp_name"],"./img/".$_FILES["food_img"]['name']);
    if( $moved ) {
        echo "<h1>Successfully uploaded</h1>";         
      } else {
        echo "<h1>Not uploaded because of error #</h1>".$_FILES["food_img"]["error"];
      }
    header("Location: ../pages/food.php");
}
?>

<!-- fetch data  -->
<?php
require('../database/db_connect.php');
$sql = 'SELECT sname , fid , fname from store,food where food.sid = store.sid;';
$result = mysqli_query($conn,$sql);
$datas = mysqli_fetch_all($result, MYSQLI_ASSOC);

?> 

<div class="Content"> 
<h1 class="add">Add Foods</h1>
<form action="food.php" class="feo" method="POST" enctype="multipart/form-data">
    <div class="page">
    <label for="fid">ID</label><br>
    <input type="number" name="id"><br>
    <label for="fname">Name</label><br>
    <input type="text" name="fname"><br>
    <label for="res_img">images</label>
	<input type="file" name="food_img">
    <br>
    <?php
    $store_result=mysqli_query($conn,"SELECT `sname`, `sid` FROM `store`");
    echo '<select class= "selec" name="store_name">';
    echo '<option selected disabled>Select Store</option>';
    while($row = mysqli_fetch_array($store_result)){
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
<br>
<!-- delete food  -->
<?php 
if(isset($_POST['delete_food'])){
    $foodid = mysqli_real_escape_string($conn,$_POST['delete_food']);
    // print_r($foodid);
    $sql = "delete from food where fid = $foodid";
    $result = mysqli_query($conn,$sql);
    header("Location: ../pages/food.php");

}
?>
      <div class="container">
        <table class="content-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>Store</th>
                <th>status</th>
            </tr>
            <tbody>
            <tbody>
            <?php foreach($datas as $data){ 
            ?>
                <tr>
                    <td><?php  echo $data['fid']?></td>
                    <td><?php  echo $data['fname']?></td>
                    <td><?php  echo $data['sname']?></td>
                    <td>
                        <form action="food.php" method="POST" >
                            <button type="submit" name="delete_food" value="<?= $data['fid'];?>" class="btn btn-danger">Delete</button>
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