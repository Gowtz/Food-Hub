<?php
require('./template/header.php');
require('./database/db_connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "select food_img,fname,sname from food,store where food.sid=store.sid and food.sid = $id";
    $result = mysqli_query($conn, $sql);
    $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $ssname = $datas[0]['sname'];
    //O^v#6#cTqE2NmBFzvsae
}
?>

<div class="bg-light">
    <div class="container d-flex justify-content-center py-5 mt-5">
        <div class="py-5 mt-5 text-dark text-center ">
            <h1>
                <?php echo $ssname ?>
            </h1><br><br>
            <h2>Available Foods</h2>
        </div>
    </div>
    <div class="container">
        <div class="card-columns">

            <?php foreach ($datas as $data) {
            ?>
                <div class="card bg-dark text-center   " style="width: 18rem;">
                    <img src="./img/<?php echo $data['food_img'] ?>" class="card-img-top " alt="...">
                    <p style="font-size:35px  " class="pt-2">
                        <?php echo $data['fname'] ?>
                    </p>
                </div>
                <?php } ?>
            <br>
            <br>

        </div>
    </div>
</div>


<br>
<br>

<div class="container text-center">
    <h2 class="py-5 "><u>Reserve Table</u></h2>
    <table style="margin:0 auto; background:#4D555D;border-radius:12px;color:white;">

        <!-- 
        <form action="book.php" style="text-align:center;" method="post">
            <tr>
                <td> <label for="" style="color:white;">Date</label></td>
                <td><input type="date" name="date" id=""></td>
                <td></td>
            </tr>
            <tr>
                <td><label for="" style="color:white;">Table For</label> </td>
                <td>
                    <?php
                    $table_result = mysqli_query($conn, "SELECT `tname`, `tid` FROM `tabl`");
                    echo '<select class= "select" name="table_name">';
                    echo '<option selected disabled>Select</option>';
                    while ($row = mysqli_fetch_array($table_result)) {
                        // print_r($row);
                        $display = $row['tname'];
                        $iid = $row['tid'];
                        echo '<option value="' . $iid . '">' . $display . '</option>';
                    }
                    echo '</select>'
                        ?>
                </td>
            </tr>
            <tr>
                <td><b><input type="submit" name="boo" value="  Book Table  "
                            style="border:none;padding:10px;margin:0 auto;text-align:center; border-radius: 7px  ; background:red; color:white ;font-weight:bold"></b>
                </td>
            </tr>
    </table>
    </form> -->

        <form action="check.php" method="post" class="col-md-3">
            <div class="form-group">
                    <h2>Select Date</h2>
                    <br>
                    <input type="date" name="date" class="form-control">
            </div>
            <button class="btn btn-primary" name="boo" type="submit">Check Table</button>
        </form>






</div>
<script>var nav = document.querySelector('nav');
    nav.classList.add('bg-dark');
</script>
<br>
<br>
</div>
</body>

</html>


<?php
include('./template/footer.php');
?>