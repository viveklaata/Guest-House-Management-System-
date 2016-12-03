
<?php
include "admin_class.php";
include "booking.php";
	
   $id=$_GET['id'];
   $num_of_rooms=$_GET['num_of_rooms'];
   $room_type=$_GET['room_type'];
   $email_id=$_GET['email_id'];
   echo $id;
    echo $num_of_rooms;
     echo $room_type;

     $user=new booking;
     $user->accept_request($id,$num_of_rooms,$room_type,$email_id,$con);
     header("Location:admin_see_request.php");
?>