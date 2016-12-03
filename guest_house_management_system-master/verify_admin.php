<?php
session_start();
include "admin_class.php";
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
$_SESSION["type"]="admin_user";
// $username=$_POST["use"];
// $password=$_POST["pwd"];

$User_id=$_POST["uid"];
$Password=$_POST["pwd"];

$_SESSION["uid"]=$User_id;
$_SESSION["pwd"]=$Password;


?>
<?php
$user=new admin_class;
$response=$user->Verify_login($User_id,$Password,$con);
//print_r($response);

if($response['response']=="success")
{
$_SESSION["admin_logged_in"]=1;
header("Location:admin_start.php");
echo "success";
}

else
{

   //echo  "<script> myFunction(); </script>";
    
	//header("Location:form_admin.php");
	$message = "Invalid_Credentials";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='admin.html';
    </script>";
    //header("Location:form_admin.php");
}
?>

<!--script>
function redirect() {
    alert("please enter sufficient ammount of rooms or reduce no of guests");
}
</script-->
</body>
</html>

