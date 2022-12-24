<!-- require connection of database  -->
<?php
require('./database/db_connect.php')
?>
<!-- end  -->


 <!-- fetch store name from database  -->
<?php  
    $sql = "select sid,sname,img from store";
    $result = mysqli_query($conn,$sql);
    $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!-- end  -->

<div id="gallery"class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
      <h2 class="section-title">Our Restaurants</h2>
</div>
<div class="gallary row">
            <?php foreach($datas as $data){?>
                <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">

        <img
          src="./img/<?php echo $data['img'] ?>"
          class="gallary-img"
        />
        <a href="def_res.php?id=<?= $data['sid'] ?>" class="gallary-overlay">
          <i class="gallary-icon "><?php echo $data['sname']?></i>
        </a>    
        </div>   
   
         <?php } ?>
</div>