<?php
session_start();
include "Users.php";


?>

<?php
if(isset($_POST['btn-login']))
{
 $User_id = mysql_real_escape_string($_POST['User_id']);
 $Password = mysql_real_escape_string($_POST['Password']);

 $user=new Registered_users;
$response=$user->Verify_login($User_id,$Password,$con);

if($response["response"]="success")
{
$_SESSION["loged_in"]=1;
//echo $_SESSION["loged_in"];
header("Location: home.php");
}
}
?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cleartuts - Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="User_id" placeholder="Your User_id" required /></td>
</tr>
<tr>
<td><input type="password" name="Password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>