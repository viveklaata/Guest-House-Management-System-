<?php
include "Users.php";
?>

<?php
$User_id=$_POST["User_id"];
$Name=$_POST["Name"];
$Password=$_POST["Password"];
$Address=$_POST["Address"];
//$Type=$_POST["Type"];
$Sex=$_POST["Sex"];
$Email=$_POST["Email"];
$Phone_no=$_POST["Phone_no"];
//$Phone_no=$_POST["Phone_no"];

$user=new Registered_users;

$required=array();

$required=$user->signUp($con, $User_id, $Email, $Phone_no, $Password, $Address, $Sex, $Name);
if($required["response"]=="success")
       {
        $_SESSION["loged_in"]=1;
        header("Location:user_start.php");
        echo "success";
        }
 else
 {

 	echo "Email or Phone already exist";
 }
//print_r($user->signUp($con, $User_id, $Email, $Phone_no, $Password, $Address, $Type,$Sex,$Name));
?>
