<?php
session_start();
//include "Guest_user.php";
include "rooms_class.php";

?>

<?php

$name_array=$_POST["name"];
$gender_array=$_POST["gender"];
$age_array=$_POST["age"];
$relation_array=$_POST["rel"];
$num_of_guests=sizeof($name_array);
$num_of_rooms=$_POST["num_of_rooms"];

$num_of_beds=$_POST["num_of_beds"];
$status_ac=$_POST["status_ac"];
$status_wifi=$_POST["status_wifi"];
if($status_ac=="Ac")
{
	$status_ac1=1;
}
else
{
	$status_ac1=0;
}
if($status_wifi=="Wifi")
{
	$status_wifi1=1;
}
else
{
	$status_wifi1=0;
}
if($status_ac1==0 && $status_wifi1==0)
{
	$room_type='A';
}
else if($status_ac1==0 && $status_wifi1==1)
{
	$room_type='B';
}
else if($status_ac1==1 && $status_wifi1==0)
{
 $room_type='C';
}
else
{
  $room_type='D';
}

$_SESSION["type"]="guest_user";
$_SESSION["name_array"]=$name_array;
$_SESSION["gender_array"]=$gender_array;
$_SESSION["age_array"]=$age_array;
$_SESSION["relation_array"]=$relation_array;
$_SESSION["num_of_rooms"]=$num_of_rooms;
$_SESSION["num_of_guests"]=$num_of_guests;



$id_card_no=$_POST["id_card_no"];
//$name=$_POST["name"];
$address=$_POST["address"];
$phone_no=$_POST["phone_no"];
$email_id=$_POST["email_id"];
$entry_date=$_POST["entrydate"];
$exit_date=$_POST["exitdate"];
//$gender=$_POST['gender'];
//$age=$_POST['age'];
$type=2;
$issued_or_not=0;

$_SESSION["id_card_no"]=$id_card_no;
//$_SESSION["name"]=$name;
$_SESSION["address"]=$address;

$room_response=array();
$required_room=new rooms_class;
$room_response=$required_room->Verify_room_availability($num_of_beds,$status_ac1,$status_wifi1,$con);
if($room_response["response1"]=="success")
{
	$_SESSION["loged_in"]=1;
	$guest_user=new Guest_users;
echo $id_card_no;
echo $address;
//echo $guest_user;
$response=$guest_user->Add_to_database($id_card_no,$name_array[0],$address,$phone_no,$email_id,$entry_date,$exit_date,$num_of_rooms,$gender_array[0],$age_array[0],$type,$issued_or_not,$room_type,$con);
	header("Location:requirements_guest.php");
//echo "Request sent you will get the reply through email";


}
else
{

   echo  "<script> myFunction(); </script>";
    
	header("Location:form_login2.php");
}

?>
