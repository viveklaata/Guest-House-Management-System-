<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
/*include "config.php";
include "database.php";*/
include "Guest_user.php";


//require_once(LIB_PATH.DS.'database.php');

class Registered_users {
	
	protected static $table_name="Registered_user";
	protected static $db_fields = array('id', 'User_id', 
		'Name','Phone_no','Password_hash', 'Address', 'Type',
		'Sex', 'Email');
	
	public $id, $User_id, $Email, $Password_hash;
	public $Name, $Phone_no;
	public $Address,$Type,$Sex;
	// public 

    Public function Verify_login($username,$password,$con)
    {
	//$mail = checkMail($con, $email);
	/*if($mail==0)
	{	
		$response = errors('Not registred');
		return $response;
		exit();
	}*/

	$result = mysqli_query($con, "select * from Registered_user where user_id='".$username."' limit 1");
	$fetch = mysqli_fetch_assoc($result);

	$num = mysqli_num_rows($result);

	if($num==0)
	{
		$response = errors('Not registred');
	}
	else  
	{
		//$auth = time().$email;
		//$auth_key = sha1($auth);

		
		//var_dump(hash_equals($fetch['password_hash'], crypt($password, $fetch['password_hash'])));

		/*if (hash_equals($fetch['Password_hash'], crypt($password, $fetch['Password_hash']))) 
		{
			$response['response'] = "success";
			/*mysqli_query($con, "update user set auth_key='".$auth_key."', access_token='".$access_token."' where email='".$email."'");*/
			/*$result = mysqli_query($con, "select * from Registered_user where User_id='".$username."' limit 1");
			$fetch = mysqli_fetch_assoc($result);
			$response['response_data'] = $fetch;
		}*/
		if($fetch['Password_hash']==$password)
		{
			$response['response'] = "success";
			/*mysqli_query($con, "update user set auth_key='".$auth_key."', access_token='".$access_token."' where email='".$email."'");*/
			$result = mysqli_query($con, "select * from Registered_user where User_id='".$username."' limit 1");
			$fetch = mysqli_fetch_assoc($result);
			$response['response_data'] = $fetch;
		}
		else
		{
			$response = errors('Authentication');
		}
	}

	return $response;

    }

function signUp($con,$User_id,$Email,$Phone_no,$Password,$Address,$Sex,$Name)
{
	if(isset($Email) && isset($Phone_no))
	{
		$mail = checkMail($con, $Email);
		$ph = checkPhone($con, $Phone_no);
		if($mail==1 || $ph==1)
		{	
			$response = errors('Already exists');
			return $response;
			exit();
		}

		$userInfo['Name'] = $Name;
		$userInfo['Email'] = $Email;
		$userInfo['Phone_no'] = $Phone_no;
		$userInfo['Address'] = $Address;
		//$userInfo['Type'] = $Type;
		$userInfo['Sex'] = $Sex;
		$userInfo['User_id']=$User_id;
        $userInfo['Password_hash'] = $Password;

            //to encrypt
		/*$cost = 10;
		// Create a random salt
		$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
		$salt = sprintf("$2a$%02d$", $cost) . $salt;
		$hash = crypt($Password, $salt);

		$userInfo['Password_hash'] = $hash;
		$Password_hash=$hash;*/
		
		$userInfo['Created_date'] = date('Y-m-d');
		$userInfo['Updated_date'] = date('Y-m-d');
		$Updated_date=$userInfo["Updated_date"];
		$Created_date=$userInfo["Created_date"];
		print_r($userInfo);

		echo '$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$+';
		$id = SQL_Insert($con, 'Registered_user', $userInfo);
		echo '+$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$';
		
		echo '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*';
		echo $id;
		echo '*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
		$result = mysqli_query($con, "select * from Registered_user where id='".$id."'");
		$fetch = mysqli_fetch_assoc($result);
		//print_r($fetch);
		$response['response'] = "success";
		$response['response_data'] = $fetch;
		/*if($response["response"]=="success")
       {
       $_SESSION["loged_in"]=1;
       header("Location:requirements.php");
      echo "success";
        }*/
	}
	else
	{
		$response = errors('Something wrong');
	}
	return $response;
}

		
}