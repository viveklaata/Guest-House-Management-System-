<?php

include "Users.php";
include "database_rooms.php";
class admin_class {
	
	protected static $table_name="admin_table";
	protected static $db_fields = array('username','password');
	
    Public function Verify_room_availability($no_of_beds,$status_ac,$status_wifi,$con)
    {
         $query="select * from room_details where no_of_beds=".$no_of_beds." AND status_ac=".$status_ac." AND status_wifi=".$status_wifi." ";
	echo "<br>";
	echo "<br>";
	echo $query;
	echo "<br>";
	echo "<br>";
		$result = mysqli_query($con, "select * from room_details where no_of_beds=".$no_of_beds." AND status_ac=".$status_ac." AND status_wifi=".$status_wifi." ");
		if($result==0){
			echo "222222222222222222222222222222222222222222222";
		}
		$fetch = mysqli_fetch_assoc($result);

		$num = mysqli_num_rows($fetch);

		if($fetch['no_available']==0)
		{
			$response = errors('Rooms unavailable');
		}
		else  
		{
			$response['response1'] = "success";
			$response['response_data'] = $fetch;
			print_r($fetch);
		}

		return $response;

    }

Public function add_room($type,$num_of_newrooms,$con)
        {
        		$query="update room_details set no_available=no_available + ".$num_of_newrooms." where Type='".$type."'";
        			echo "<br>";
					echo "<br>";
					echo $query;
					echo "<br>";
					echo "<br>";
           		$result = mysqli_query($con, "".$query."");
               if($result==NULL){
			    echo "No such room found";
			  // header("Location:admin_start.html");
		      }
		      else
		      {
		      	//$fetch = mysqli_fetch_assoc($result);
		      	$fetch['response']="success";
		      	header("Location:admin_start.php");
   		      }
               return $fetch;
        }
        Public function see_request($con)
        {
        	
        		$query="select * from guest_user where issued_or_not=\"0\" ";
     //    			echo "<br>";
					// echo "<br>";
					// echo $query;
					// echo "<br>";
					// echo "<br>";
           		$result = mysqli_query($con, "".$query."");
               if($result==NULL){
			    echo "No one is in need of room presently";
			  // header("Lo.cation:admin_start.php");
		      }
		      else
		      {
		      	$row=array();
               $i=0;
		      	while($fetch = mysqli_fetch_assoc($result))
		      	{ 	
		   //    		echo "<br>";
					// echo "<br>";
					$row[$i]=$fetch;
					$xxx=$row[$i];
					$i++;
					//print_r($xxx);
		      	//print_r($fetch);

		      }
		      //echo "Hello";

		      $row['response']="success";
   		      $row['no_of_row']=$i;

		      	//header("Location:admin_start.html");
   		      }
   		      return $row;

        }
Public function Verify_login($username,$password,$con)
    {

	$result = mysqli_query($con, "select * from admin_table where username='".$username."' ");
	if($result==NULL)
	{
		header("Location:form_admin.php");
	}
	
	else  
	{
		$fetch = mysqli_fetch_assoc($result);
		if($fetch['password']==$password)
		{
			$response['response'] = "success";
			$response['response_data'] = $fetch;
		}
		else
		{
			$response['response'] = "failure";
			$response = errors('Authentication');
		}
	}

	return $response;

    }



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



 Public function see_rooms($con)
        {
        	
        		$query="select * from room_details";
     //    		
           		$result = mysqli_query($con, "".$query."");
               if($result==NULL){
			    echo "No room atall in the institute";
		      }
		      else
		      {
		      	$row=array();
               $i=0;
		      	while($fetch = mysqli_fetch_assoc($result))
		      	{ 	
		   //    		echo "<br>";
					// echo "<br>";
					$row[$i]=$fetch;
					$xxx=$row[$i];
					$i++;
		      }
		      //echo "Hello";

		      $row['response']="success";
   		      $row['no_of_row']=$i;

		      	//header("Location:admin_start.html");
   		      }
   		      return $row;

        }

}