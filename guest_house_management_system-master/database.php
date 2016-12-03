<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_software";
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);


function errors($type)
{
	$response=array();
	if($type == "Missing")
	{
		$response['response'] = "failed";
		$response['error'] = "Something is missing or not correct.";
	}
	else if($type == 'Invalid Method')
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid method call.";
	}
	else if($type == 'Invalid UserId')
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid user_id.";
	}
	else if($type == 'Authentication')
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid authentication.";
	}
	else if($type == 'Not registred')
	{
		$response['response'] = "failed";
		$response['error'] = "Not registred yet.";
	}
	else if($type == "Stock empty")
	{
		$response['response'] = "failed";
		$response['error'] = "No data in stock yet.";
	}
	else if($type == 'Already exists')
	{
		$response['response'] = "failed";
		$response['error'] = "Email or phone already exists.";
	}
	else if($type == 'Something wrong')
	{
		$response['response'] = "failed";
		$response['error'] = "Somewent wrong with parameters.";
	}
	else if($type == 'Invalid ProductId')
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid product_id.";
	}
	else if($type == 'Invalid auth_key')
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid or expired auth_key.";
	}
	else if($type == "Invalid OTP")
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid or expired OTP.";	
	}
	else if($type == "Invalid cart_id")
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid cart_id.";	
	}
	else if($type == "Invalid a_id")
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid address_id.";	
	}
	else if($type == "Invalid phone_number")
	{
		$response['response'] = "failed";
		$response['error'] = "Invalid phone number or doesn't exists.";	
	}

	return $response;
}

//Check existing email id
function checkMail($con, $email)
{
	$sql = mysqli_query($con, "select * from Registered_user where Email='".$email."'");
	$num = mysqli_num_rows($sql);
	if($num!=0)
	{
		return 1;	
	}
	else
	{
		return 0;
	}
	/*if($sql==NULL)
	{
		return 0;
	}
	else
	{
		return 1;
	}*/
}

//Check existing phone number
function checkPhone($con, $phone)
{
	$sql = mysqli_query($con, "select * from Registered_user where Phone_no='".$phone."'");
	$num = mysqli_num_rows($sql);
	if($num!=0)
	{
		return 1;	
	}
	else
	{
		return 0;
	}
	/*if($sql==NULL)
	{
		return 0;
	}
	else
	{
		return 1;
	}*/
}

//Validate user_id in db
function validateUserId($con, $user_id)
{
	//echo $user_id;
	$sql = mysqli_query($con, "select * from user where id='".$user_id."'");
	$num = mysqli_num_rows($sql);
	if($num==0)
	{
		return 1;	
	}
	else
	{
		return 0;
	}
}

function SQL_Insert($con, $table, $array)
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	$keys=array();
	$values=array();

	foreach($array as $key=>$val)
	{
		array_push($keys,$key);
		print_r($val);
		echo " ";
		array_push($values,"'".addslashes($val)."'");
	}

	$keys="(".implode(',',$keys).")";
	$values="(".implode(',',$values).")";
	
	$query="INSERT INTO ".$table.$keys." VALUES ".$values;
	$query="INSERT INTO ".$table." ".$keys." VALUES ".$values;
	echo "<br>";
	echo "<br>";
	echo $query;
	echo "<br>";
	echo "<br>";
	$ins = mysqli_query($con, $query);

	return mysqli_insert_id($con);
//	mysqli_close($con);
}
function SQL_Insert1($con, $table, $array)
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	$keys=array();
	$values=array();

	foreach($array as $key=>$val)
	{
		array_push($keys,$key);
		print_r($val);
		echo " ";
		array_push($values,"'".addslashes($val[0])."'");
	}

	$keys="(".implode(',',$keys).")";
	$values="(".implode(',',$values).")";
	
	$query="INSERT INTO ".$table.$keys." VALUES ".$values;
	$query="INSERT INTO ".$table." ".$keys." VALUES ".$values;
	echo "<br>";
	echo "<br>";
	echo $query;
	echo "<br>";
	echo "<br>";
	$ins = mysqli_query($con, $query);

	return mysqli_insert_id($con);
//	mysqli_close($con);
}

?>