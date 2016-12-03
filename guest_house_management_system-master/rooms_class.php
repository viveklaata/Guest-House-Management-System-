<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
/*include "config.php";
include "database_rooms.php";*/
include "Users.php";
include "database_rooms.php";

//require_once(LIB_PATH.DS.'database.php');

class rooms_class {
	
	protected static $table_name="room_details";
	protected static $db_fields = array('id', 'no_of_beds', 
		'status_ac','status_wifi','no_available', 'Type');
	
	public $id, $no_of_beds, $status_ac, $status_wifi;
	public $no_available, $guest_id;
	public $Type;
	// public 

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

/*function signUp($con,$no_of_beds,$status_ac,$status_wifi)
{
	if(isset($no_of_beds) && isset($status_wifi))
	{
		$roomInfo['no_of_beds'] = $no_of_beds;
		$roomInfo['status_wifi'] = $status_wifi;
		$roomInfo['status_ac'] = $status_ac;

		print_r($roomInfo);

		echo '$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$';
		echo "<br>";
		$id = SQL_query_room_details($con, 'room_details', $roomInfo);
		echo "<br>";
		echo '$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$';
		
		echo '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*';
		echo "<br>";
		echo $id;
		echo "<br>";
		echo '*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
		$result = mysqli_query($con, "select * from Registered_user where id='".$id."'");
		$fetch = mysqli_fetch_assoc($result);
		//print_r($fetch);
		$response['response'] = "success";
		$response['response_data'] = $fetch;
	}
	else
	{
		$response = errors('Something wrong');
	}
	return $response;
}*/

		
}