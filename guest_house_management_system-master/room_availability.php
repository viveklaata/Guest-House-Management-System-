<?php
session_start();
include "rooms_class.php";
//include "Guest_user.php";
?>

<html>
<body>

<script>
function myFunction() {
    alert("Invalid Credentials Please Login Again");
}

</script>

<?php
//print_r($_POST);
//$_SESSION["type"]="registered_user";

$name_array=$_POST["name"];
$gender_array=$_POST["gender"];
$age_array=$_POST["age"];
$relation_array=$_POST["rel"];
$num_of_guests=sizeof($name_array);
$num_of_rooms=$_POST["num_of_rooms"];
$address="nothing";
$entry_date=$_POST["entrydate"];
$exit_date=$_POST["exitdate"];
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
$type=1;
$issued_or_not=0;

if($num_of_guests>2*$num_of_rooms)
{
    //redirect();
    echo "number of guests are very large";
	header('Location:form_requirements.php');
}

$_SESSION["name_array"]=$name_array;
$_SESSION["gender_array"]=$gender_array;
$_SESSION["age_array"]=$age_array;
$_SESSION["relation_array"]=$relation_array;
$_SESSION["num_of_rooms"]=$num_of_rooms;
$_SESSION["num_of_guests"]=$num_of_guests;
$_SESSION["start_date"]=$_POST["entrydate"];
$_SESSION["end_date"]=$_POST["exitdate"];
$_SESSION["room_type"]=$room_type;

$User_id=$_SESSION["uid"];

$phone_no=$_POST["phone_no"];
$email_id=$_POST["email_id"];



?>
<?php

$guest_user=new Guest_users;
//echo $guest_user;
$room_response=array();
$required_room=new rooms_class;
$room_response=$required_room->Verify_room_availability($num_of_beds,$status_ac1,$status_wifi1,$con);
if($room_response["response1"]=="success"){
$response=$guest_user->Add_to_database($User_id,$name_array[0],$address,$phone_no,$email_id,$entry_date,$exit_date,$num_of_rooms,$gender_array[0],$age_array[0],$type,$issued_or_not,$room_type,$con);
	header("Location:final.php");
echo "success";
}

else
{

   $message = "Rooms unavailable presently Enter different requirements";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='form_requirements.php';
    </script>"; 
}


?>

<!--script>
function redirect() {
    alert("please enter sufficient ammount of rooms or reduce no of guests");
}
</script-->
</body>
</html>

