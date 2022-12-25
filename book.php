<html>

<style>
body {
    background-color: #1E1E1E ;
    color:red;
}
.gg{
  font-size:50px; 
  marquee direction="right";
  
}
.p{
  font-size:30px; 
  text-align:center;
  
}
</style>
<div class="p">
<a href="./">Home</li></a>
</div><br><br>
<div class="gg">
  

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
      echo "Congragulations!! <br><br> Your Table Has Been Booked For  \t ". $date ."<br> \tTable For\t".$table_name.  "\tPeople"; 
      }  

  $sql = "insert into trans(tid,cname,datt) values($table_name,'$name','$date')";
  mysqli_query($conn,$sql);
  }
  ?>
</div>
<br>
<img src="assets/imgs/r.jpg" alt=""
width="400"
height="400"/>



</html>