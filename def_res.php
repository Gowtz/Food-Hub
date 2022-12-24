
<?php
require('./template/header.php');
require('./database/db_connect.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "select food_img,fname,sname from food,store where food.sid=store.sid and food.sid = $id";
    $result= mysqli_query($conn,$sql);
    $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $ssname = $datas[0]['sname'];
    //O^v#6#cTqE2NmBFzvsae
}
?>

   <div class="container d-flex justify-content-center py-5 mt-5">
    <div class="">
        <h1><u><?php echo $ssname ?></u></h1>
        <h3>Available Foods</h3>
        
    </div>
   </div>
   <div class="container">
   <div class="card-columns">

   <?php foreach($datas as $data){
            ?>
<div class="card bg-dark " style="width: 18rem;">
  <img src="./img/<?php echo $data['food_img']?>" class="card-img-top " alt="...">
  <div class="card-body">
    <h2 class="card-title text-center"><?php echo $data['fname']?></h2>
  </div>
</div>      
 <?php }  ?> 
        </div>
   </div>




   <div class="container text-center">
   <h2 class="py-5 ">Reserve Table</h2>
   <form action="book.php" method="post">
    <label for="">Date</label>
    <input type="date" name="date" id="">
    
    <?php
    $table_result=mysqli_query($conn,"SELECT `tname`, `tid` FROM `tabl`");
    echo '<select class= "select" name="table_name">';
    echo '<option selected disabled>Table For</option>';
    while($row = mysqli_fetch_array($table_result)){
    // print_r($row);
    $display=$row['tname'];
    $iid = $row['tid'];
    echo '<option value="'.$iid.'">'.$display.'</option>';
    }
    echo'</select>'
    ?>
<input type="submit" name="boo" value="Book Table">
   </form>
   </div>
   <script>var nav = document.querySelector('nav');
       nav.classList.add('bg-dark');
   </script>
</body>
</html>

