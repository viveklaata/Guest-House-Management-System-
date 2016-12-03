<?php
session_start();
include "Users.php";
?>

<?php
$User_id=$_POST["uid"];
$Password=$_POST["pwd"];
$user=new Registered_users;
$response=$user->Verify_login($User_id,$Password,$con);

if($response["response"]="success")
{
$_SESSION["loged_in"]=1;
}


?>
