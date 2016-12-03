
<?php
include "admin_class.php";
include "booking.php";
	
   $email_id=$_GET['email_id'];
   echo $id;
    echo $num_of_rooms;
     echo $room_type;

     $user=new booking;
     $user->reject_request($email_id,$con);
     header("Location:admin_see_request.php");
?>