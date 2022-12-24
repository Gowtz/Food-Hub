
<?php
   session_start();
   
   if(session_destroy()) {
        header("Location: ../");
        echo '<script language="javascript">';
        echo 'alert("Logout successful")';
        echo '</script>';
   }
   
?>