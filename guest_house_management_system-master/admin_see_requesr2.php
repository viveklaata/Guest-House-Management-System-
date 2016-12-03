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

$user=new admin_class;
$response=$user->see_request($con);
	echo "<br>";
	echo "<br>";
echo "Hello";

	echo "<br>";
	echo "<br>";
echo "<table>";
  echo "<tr><th>User Type</th><th>Name</th><th>Gender</th><th>Age</th><th>Entry date</th><th>Exit date</th><th>Num of rooms</th><th>Ldap_id</th><th>Govt_id</th><th>Room type</th><th>Accept/Reject</th></tr>";

$i=$response['no_of_row'];
while($i)
{
	// echo "<br>";
	// echo "<br>";
	$i--;
	//print_r($response[$response['no_of_row']]);
	echo "<tr><td style='width: 50px;'>".$response[$i]['type']."</td><td style='width: 200px;'>".$response[$i]['name']."</td><td>".$response[$i]['gender']."</td><td>".$response[$i]['age']."</td><td style='width: 100px;'>".$response[$i]['entry_date']."</td><td>".$response[$i]['exit_date']."</td><td>".$response[$i]['no_of_rooms']."</td><td>".$response[$i]['ldap_id']."</td><td>".$response[$i]['govt_id']."</td><td>".$response[$i]['room_type']."</td><td>".$response[$i]['room_type']."</td><td><button type=\"button\" onclick=\"$user->accept_request(".$i.",".$response.",$con)\">Accept</button></td><td><button type=\"button\" onclick=\"alert('Hello world!')\">Reject</button></td></tr>";
}
echo "</table>";
//print_r($response[1]);

if($response['response']=="success")
{
$_SESSION["loged_in"]=1;
}

else
{

   echo  "<script> myFunction(); </script>";

   echo "No requests presently";
    
	//header("Location:adding_room.php");
}

?>

</body>
</html>

