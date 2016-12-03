<?php
   session_start();
   $_SESSION["user_logged_in"]=0;
   
   
   echo 'You have cleaned session';
   header("Location:user_start.php");
?>