<?php
include "config.php";
include "database.php";
?>
<?php
class Guest_users {
	
	protected static $table_name="guest_user";
	//protected static $db_fields = array('user_id', 'name', 
		//'address');
	
	public $govt_id,$name,$address,$entry_date,$exit_date,$num_of_rooms,$gender,$age,$type,$issued_or_not;
		// public 

    Public function Add_to_database($govt_id,$name,$address,$phone_no,$email_id,$entry_date,$exit_date,$num_of_rooms,$gender,$age,$type,$issued_or_not,$room_type,$con)
    {

        $userInfo['govt_id']=$govt_id;
        $userInfo['name']=$name;
        $userInfo['address']=$address;
        $userInfo['phone_no']=$phone_no;
        $userInfo['email_id']=$email_id;
         $userInfo['entry_date']=$entry_date;
          $userInfo['exit_date']=$exit_date;
           $userInfo['no_of_rooms']=$num_of_rooms;
       $userInfo['gender']=$gender;
       $userInfo['age']=$age;
       $userInfo['type']=$type;
        $userInfo['room_type']=$room_type;
       $userInfo['issued_or_not']=$issued_or_not;
    	$userInfo['Created_date'] = date('Y-m-d');
		$userInfo['Updated_date'] = date('Y-m-d');
    	$id = SQL_Insert($con, 'guest_user', $userInfo);
    }
}

?>