<?php
include('./template/header.php');
if (!isset($_SESSION['login_user'])) {
      header("Location: log.php");
   }
?>
<div class="container py-5 mt-5">
<h1 class="py-5 mt-5"><?php echo "Your Logged In"?></h1>

<a class="btn btn-primary" href="./database/logout.php">Logout</a>
</div>
