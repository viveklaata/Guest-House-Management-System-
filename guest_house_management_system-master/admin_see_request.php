<?php
session_start();
include "admin_class.php";
//include "Guest_user.php";
?>


<html>
<head>
		<meta charset='UTF-8'>
	
	<title>Responsive Table</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/styletable.css">
	<link rel="stylesheet"  href="css/admin_style.css">

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	
	<!--[if !IE]><!-->
	<style>

			body {
				background: #e1c192 url(images/bg3.jpg);
				-webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
			}
		
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "First Name"; }
		td:nth-of-type(2):before { content: "Last Name"; }
		td:nth-of-type(3):before { content: "Job Title"; }
		td:nth-of-type(4):before { content: "Favorite Color"; }
		td:nth-of-type(5):before { content: "Wars of Trek?"; }
		td:nth-of-type(6):before { content: "Porn Name"; }
		td:nth-of-type(7):before { content: "Date of Birth"; }
		td:nth-of-type(8):before { content: "Dream Vacation City"; }
		td:nth-of-type(9):before { content: "GPA"; }
		td:nth-of-type(10):before { content: "Arbitrary Data"; }
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	
	</style>

</head>
<body>

<script>
function myFunction() {
    alert("Invalid Credentials Please Login Again");
}

</script>
<p style = "margin-top:5%"></p>
<div id="login" style>
<h2><span class="fontawesome-lock"></span>Guest House Request</h2>
</div>
<?php

if($_SESSION["admin_logged_in"]!=1)
{
		header("Location:admin.html");

}	


$user=new admin_class;
$response=$user->see_request($con);
echo "<table>";
  echo "<tr><th>Id</th><th>User Type</th><th>Name</th><th>Gender</th><th>Age</th><th>Entry date</th><th>Exit date</th><th>No of Rooms</th><th>Govt_id</th><th>Room type</th><th>Accept</th><th>Reject</th></tr>";
$i=$response['no_of_row'];
while($i)
{
	// echo "<br>";
	// echo "<br>";
	$i--;
	//print_r($response[$response['no_of_row']]);

	echo "<tr><td>".$response[$i]['id']."</td><td style='width: 50px;'>".$response[$i]['type']."</td>
	<td style='width: 200px;'>".$response[$i]['name']."</td>
	<td>".$response[$i]['gender']."</td><td>".$response[$i]['age']."</td>
	<td style='width: 100px;'>".$response[$i]['entry_date']."</td>
	<td>".$response[$i]['exit_date']."</td><td>".$response[$i]['no_of_rooms']."</td>
	<td>".$response[$i]['govt_id']."</td>
	<td>".$response[$i]['room_type']."</td>
	<td style='width: 100px;'><a href=\"accept_request.php?id=".$response[$i]['id']."&num_of_rooms=".$response[$i]['no_of_rooms']."&room_type=".$response[$i]['room_type']."&email_id=".$response[$i]['email_id']."\">Accept</a></td>
	<td><a href=\"reject_request.php?email_id=".$response[$i]['email_id']."\">Rejection Mail</a></td></tr>";

}
echo "</table>";

?>	
<p style = "margin-top:1%"></p>
	<div id="login" style>
	<h2><span class="fontawesome-lock"></span>Room Availability</h2>
	</div>
<?php
//print_r($response[1]);

	
 $response_rooms=$user->see_rooms($con);
echo "<table>";
  echo "<tr><th>Room_Type</th><th>Availability</th></tr>";
$j=$response_rooms['no_of_row'];
while($j)
{
	// echo "<br>";
	// echo "<br>";
	$j--;
	//print_r($response[$response['no_of_row']]);

	echo "<tr><td>".$response_rooms[$j]['Type']."</td>
	<td style='width: 50px;'>".$response_rooms[$j]['no_available']."</td>
	</tr>";
}
echo "</table>";

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
<div id="login">
<p style = "margin-top: 5%;"> </p>
<center>
		<p style = "margin-top: 5%;"> </p>
		<a href = "logout_test.php" class = "btn btn-success">Logout</a>
		<a href = "adding_room.php" class = "btn btn-success">Add Rooms</a>

		</div>
<!-- <div>
<a href="logout_test.php">Session</a>.
</div>

<div>
Click here if you want to add <a href="adding_room.php">New rooms</a>.
</div>
 -->
</html>

