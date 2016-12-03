<html>
<head>
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
    <h2><span class="fontawesome-lock"></span>Admin Guest House</h2>
    <form method="POST" name="form1" action="logout_test.php" enctype="multipart/form-data" >
      <fieldset>
        <p><a href="adding_room.php" class="button">Want to add a new room</a> </p>
        <p>   <a href="admin_see_request.php" class="button">See request for room</a> </p>
        <p><input type="submit" value="Logout"></p>
      </fieldset>
    </form>
  </div> 
</body>

</html>
