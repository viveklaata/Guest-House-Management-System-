<?php
class booking {
	
	Public function accept_request($guest_index,$num_of_rooms,$room_type,$email_id,$con)
        {
        	//$response_guest=see_request($con);
        		$query="update room_details set no_available=no_available - ".$num_of_rooms." where Type='".$room_type."'";
        			echo "<br>";
					echo "<br>";
					echo $query;		//error may occure for negetive no_available
					echo "<br>";
					echo "<br>";
           		$result = mysqli_query($con, "".$query."");

        		$query="update guest_user set issued_or_not='1' where id='".$guest_index."'";
        			echo "<br>";
					echo "<br>";
					echo $query;		//error may occure for negetive no_available
					echo "<br>";
					echo "<br>";
        		$result = mysqli_query($con, "".$query."");


         //<?php
         // the message
        $msg = "The room can be booked for you , inform through mail if required";

// use wordwrap() if lines are longer than 70 characters
         $msg = wordwrap($msg,70);

// send email
           mail("".$email_id."","Accommodation",$msg);
 	
}




Public function reject_request($email_id,$con)
        {
         // the message
        $msg = "Presently room is unavailable , We will be mailing incase it becomes available";

// use wordwrap() if lines are longer than 70 characters
         $msg = wordwrap($msg,70);

// send email
           mail("".$email_id."","Accommodation",$msg);
 	
}

}