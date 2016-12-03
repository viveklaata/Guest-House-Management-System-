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
$_SESSION["type"]="registered_user";


$User_id=$_POST["uid"];
$Password=$_POST["pwd"];

$_SESSION["uid"]=$User_id;
$_SESSION["pwd"]=$Password;


?>
<?php

$user=new Registered_users;
$response=$user->Verify_login($User_id,$Password,$con);
//print_r($response);

if($response['response']=="success")
{
$_SESSION["user_logged_in"]=1;
    header("Location:form_requirements.php");
}
else
{
    //header("Location:form_login1.php");
    $message = "Invalid_credentials";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='user_start.php';
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

