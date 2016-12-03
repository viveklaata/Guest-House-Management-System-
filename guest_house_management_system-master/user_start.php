<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" lang="en">

<head>

	<meta charset="utf-8">

	<title>Registered User Login</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<link rel="stylesheet"  href="css/admin_style.css">

	<style>
			body {
				background: #e1c192 url(images/pic06.jpg);
			}
		</style>
</head>
<body>

	<div id="login">
		<h2><span class="fontawesome-lock"></span>Registered User Login</h2>
		<form method="POST" name="form1" onsubmit="return validateForm()" action="verify_user.php" enctype="multipart/form-data" >

			<fieldset>
				<p><label for="user_id">User Id</label></p>
				<p><input type="text" id="user_id" name="uid"></p> 
				<div id ="valid_user_id" ></div>

				<p><label for="user_password">Password</label></p>
				<p><input type="password" id="user_password" value="" name="pwd"></p> 
				<div id ="valid_password" ></div>

				<p><input type="submit" value="Login"></p>
			</fieldset>
		</form>
	</div> 
	<script language="javascript">
	
    // var x = document.getElementById("input");
    // x.onclick = function() {validateForm()};
     var defaultColor = document.getElementById("demail").style.borderColor;

    function validateForm() {
    	flag = true;
    if (document.getElementById("user_password").value == null || document.getElementById("user_password").value == "") {
        document.getElementById("valid_password").innerHTML = "Please Enter Password";
        document.getElementById("user_password").style.borderColor = 'red';
        console.log("error");
        flag = false;
    }

    if (document.getElementById("user_id").value == null || document.getElementById("user_id").value == "") {
        document.getElementById("valid_user_id").innerHTML = "Please Enter User Id";
        document.getElementById("user_id").style.borderColor = 'red';
        console.log("error");
        flag = false;
    }      

    return flag;
      }

</script>


</body>
<div id="login">
<p style = "margin-top: 5%;"> </p>
<center>
		<p style = "margin-top: 5%;"> </p>
		<a href = "form_signup.php" class = "btn btn-success">Sign Up</a>
		</div>
</html>
