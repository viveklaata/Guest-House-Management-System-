<html>
<body>
<!--form action="show_room.php" method="post">
AC_required: <input type="text" name="ac_required"><br>
WIFI_required: <input type="text" name="wifi_required"><br>
no_of_beds_required: <input type="int" name="no_of_beds"><br>
Password: <input type="text" name="Password"><br>
<input type="submit" name="submit">
</form-->
<?php
    $message = "Request sent";
    echo "<script type='text/javascript'>
    
    alert('$message');
    window.location.href='form_login2.php';
    </script>";	
?>
Request sent you will get the reply through email
</body>
</html>