<html>
<head>


	<meta charset="utf-8">

	<title>Admin IIT Jodhour</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	<link rel="stylesheet"  href="css/admin_style.css">

	<style>
			body {
				background: #e1c192 url(images/pic06.jpg);
			}
		</style>


</head>

<body>
<?php
session_start();
if($_SESSION["admin_logged_in"]!=1)
{
		header("Location:admin.html");

}	
else
{
	//$_SESSION["admin_logged_in"]=0;
  ;
}
?>

	<div id="login">
		<h2><span class="fontawesome-lock"></span> Details of rooms to be changed </h2>
		<form method="POST" action="admin_action.php"  enctype="multipart/form-data" >

			<fieldset>
				<p><label for="user_password"> Number of Rooms </label></p>
				<p><input type="number" name="num_of_rooms[]" id="user_password" value="0" style="background-color: #eee;
					color: #777;
					padding: 4px 10px;
					width: 328px; 
					"></p> 

				<p><label for="user_id">Type</label></p>
				<p><select name="type[]"  style="background-color: #eee;
					color: #777;
					padding: 4px 10px;
					width: 328px; 
					" >
						<option selected>A</option>
						<option>B</option> 
						<option>C</option> 
						<option>D</option> 
				</p> 
				<br />
				<p><input type="submit" value="Submit" style = "margin-top: 5%;"></p>
			</fieldset>
		</form>
		<p style = "margin-top: 5%;"> </p>
		<form method="POST" action="logout_test.php"  enctype="multipart/form-data" >
				<fieldset  style = "background-color : #C0C0C0;">
					<p><input type="submit" value="Logout"></p>
				</fieldset>
		</form>
	</div> 



</html>