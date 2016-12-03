<?php
   session_start();
   $_SESSION["admin_logged_in"]=0;
   
   
   echo 'You have cleaned session';
   header("Location:admin.html");
?>