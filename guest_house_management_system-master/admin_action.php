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

$type_array=$_POST["type"];
$num_of_rooms_array=$_POST["num_of_rooms"];

?>
<?php

$user=new admin_class;
$response=$user->add_room($type_array[0],$num_of_rooms_array[0],$con);
print_r($response);

if($response['response']=="success")
{
$_SESSION["loged_in"]=1;
}

else
{

   echo  "<script> myFunction(); </script>";

   echo "No such room found";
    
	//header("Location:adding_room.php");
}

?>

<!--script>
function redirect() {
    alert("please enter sufficient ammount of rooms or reduce no of guests");
}
</script-->
</body>
</html>

