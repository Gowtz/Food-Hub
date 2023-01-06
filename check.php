<?php
include('./database/db_connect.php');
require('./template/header.php');
$date = 2022 - 12 - 12;
if (isset($_POST['boo'])) {
    $date = $_POST['date'];

    ?>

    <div class="container py-5 " style="margin-top: 15rem; text-align: center;">
        <form action="book.php" method="post">
            <h1>Select Table</h1>
            <input class="form-control" type="date" name="date" value="<?= $date ?>">
            <br><br><br>

            <?php
            $sql = "SELECT tname, tid FROM tabl where tid not in (SELECT tid from trans where datt= '$date' ) ";
            $table_result = mysqli_query($conn, $sql);
            $datas = mysqli_fetch_all($table_result, MYSQLI_ASSOC);
            // print_r($datas);
        
            echo '<select class= "select" name="table_name">';
            echo '<option selected disabled>Select</option>';
            foreach ($datas as $row) {
                // print_r($row);
                $display = $row['tname'];
                $iid = $row['tid'];
                echo '<option value="' . $iid . '">' . $display . '</option>';
            }
            echo '</select>';

                ?>
<br>
<br><br><br>
            <button class="btn btn-primary" name="boo" type="submit">Book Now</button>

        </form>
    </div>

<?php } ?>