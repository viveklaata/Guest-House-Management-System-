<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="icon" type="image/vnd.microsoft.icon" href="icon.html">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="_your description goes here_" />
<meta name="keywords" content="_your,keywords,goes,here_" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" title="style (screen)" />

<script type="text/javascript" src="script.js">
	</script>

<title>Hostel Affairs(HA)</title>


<script language="javascript">
	function SubmitForm() 
	{
		var form = document.forms[0];
		if ((form.uid.value == 'uid')) 
		   {
			alert("Please fill out Your LDAP ID");	
		   return false;
		   }		
		if ((form.pwd.value == 'pwd')) 
		   {
			alert("Please fill out Your Password" );
			return false;
		   }
		if ((form.hostel.value == '')) 
		   {
			alert("Please fill out Your hostel no." );
			return false;
		   }
		if ((form.room.value == '')) 
		   {
			alert("Please fill out Your room no." );
			return false;
		   }
		if ((form.problem.value.length < 1)) 
		   {
			alert("Please fill out Your problem");
			return false;
		   }	 
		
		else {
		form.submit();
		}
	}	
	function FormFill() {
		var form = document.forms[0];
		form.name.value = "jhun";
		form.hostel_room.value = "h8 240";
		form.email.value = "xyz@gmail.com";
		form.problem.value = " Please do not complain about problems of your wing or your room. Those should be forwarded to the hostel council. Comments and Suggestions about Security, Networking, Hospital, Guest House, Tum-Tums, website or any kiosk in hostel area are most welcome. ";
		}
	function ResetForm() {
		var form = document.forms[0];
		form.name.value = "";
		form.hostel_room.value = "";
		form.email.value = "";
		form.problem.value = "";
		}
</script>

<style type="text/css">
	@import "css/jquery.datepick.css";
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<script type="text/javascript">
	$(function() {
		$('.popupDatepicker').datepick({dateFormat: 'dd-M-yyyy'});
	});
</script>

<script language="javascript">
	fields = 2;
	function addInput() {
		if (fields != 7) {
			document.getElementById('table').innerHTML += "<tr><td> <input  type='text' name='name[]' onBlur='updateDOM(this)' style='background-color:#222; padding:5px; height:17px; width:200px; color:orange; opacity:0.8; border:0;'/> </td><td> <select name='gender[]' onBlur='updateDOM(this)' style='background-color:#222; height:25px; width:80px; font-size:14px; color:orange; text-align:center;'> <option selected>Male</option> <option>Female</option></td> <td> <input type='text' name='age[]' onBlur='updateDOM(this)' style='background-color:#222; padding:5px;  height:17px; width:50px; color:orange; border:0; opacity:0.8;'/> </td><td> <input  type='text' onBlur='updateDOM(this)' name='rel[]'  style='background-color:#222; padding:5px;  height:17px; width:200px; color:orange; border:0; opacity:0.8;'/> </td><td> <input type='button' onclick='removeFormField(this)' value='Remove' /> </td></tr>";
			fields += 1;
			document.getElementById('id').value=fields;
		} else {
			document.getElementById('add_button').disabled=true;
		}
	}
	  
	function removeFormField(src) {
		var row = src.parentNode.parentNode;
		row.parentNode.removeChild(row);
		fields -= 1;
		document.getElementById('add_button').disabled=false;
	}
	  
	function updateDOM(inputField) {
		// if the inputField ID string has been passed in, get the inputField object
		if (typeof inputField == "string") {
			inputField = document.getElementById(inputField);
		}
		inputField.setAttribute("value",inputField.value);
	}
	
	function validate() {
		var myform = document.forms["form1"];
		//formName being the name of the form
		for (i = 0; i < myform.length; i++) {
			inp= myform.elements[i];
			if(inp.type=="text" || inp.type=="password") {
				if (inp.value.length == 0){
						if (inp.name=="name[]") {
							alert("Please enter the name of guest");
						} else if (inp.name=="age[]") {
							alert("Please enter the age of guest");
						} else if (inp.name=="rel[]") {
							alert("Please enter the relationship with guest");
						} else {
							alert("Please enter value in field : " + inp.name);
						}
					return false;
				}
			}
		}
	}
</script>
</head>

<body>
<div id="main" align="center">
<div align="center" style="font-size:24px; "><font size="+3">G</font>uest <font size="+3">A</font>ccomodation <font size="+3">B</font>ooking<font size="+3"> S</font>ystem 
For Registered user</font></div>


<font size="-1">
<br><br>
<form method="POST" name="form1" onsubmit="return validate()" action="login1.php" enctype="multipart/form-data" >
<table cellspacing="5px">
<tr>
	<tr><th><h2>Your details:</h2></th></tr>
<td  width="40%">
<font size="-1">UserID : </font>
</td>
<td>
 <input  type="text" name="uid"  style="background-color:#222; padding:5px;  height:17px; width:200px; color:orange; border:0; opacity:0.8;"/>
	<!--font size="-1">&nbsp; @ iitj.ac.in</font><br-->
</td>
</tr>
<tr>
<td>
<font size="-1">Password :</font>
</td>
<td>
 <input  type="password" name="pwd"  style="background-color:#222; padding:5px;  height:17px; width:200px; color:orange; border:0; opacity:0.8"/>
	<br>
</td>
</tr>

<tr>
<td>
<p><a href="form_signup.php">Sign Up</a></p>
</td>
</tr>


<br />
<br />
<br />
<th><h2>Guest details:</h2></th>
</tr>
<tr>
<td> <font size="-1">Entry Date :  </font> </td>
<td>
<input type="text" name="entrydate" style="background-color:#222; padding:5px;  height:17px; width:80px; color:orange; border:0; opacity:0.8" class="popupDatepicker"/>
<br/>
</td>
</tr>
<tr>
<td> <font size="-1">Exit Date :  </font> </td>
<td>
<input type="text" name="exitdate" style="background-color:#222; padding:5px;  height:17px; width:80px; color:orange; border:0; opacity:0.8" class="popupDatepicker"/>
<br/>
</td>
</tr>

<tr>
<td> <font size="-1">No of Rooms :  </font> </td>
<td>
<input type="text" name="num_of_rooms" style="background-color:#222; padding:5px;  height:17px; width:80px; color:orange; border:0; opacity:0.8" />
<br/>
</td>
</tr>

<tr>
<td> <font size="-1">No of Beds :  </font> </td>
<td>
<input type="text" name="num_of_beds" style="background-color:#222; padding:5px;  height:17px; width:80px; color:orange; border:0; opacity:0.8" />
<br/>
</td>
</tr>

<tr>
<td> <font size="-1">Ac or Non Ac :  </font> </td>
<td> <select name="status_ac" style="background-color:#222; padding:5px;  height:27px; width:80px; color:orange; border:0; opacity:0.8" />
		<option selected>Ac</option>
		<option>Non_Ac</option> 
	</td>
</tr>

<tr>
<td> <font size="-1">Internet :  </font> </td>
<td> <select name="status_wifi" />
		<option selected>wifi_required</option>
		<option>wifi_notrequired</option> 
	</td>
</tr>


<tr>
<td>	
<font size="-1">Purpose of visit :  </font>
</td>
<td>
<textarea  type="text" rows="3" name="subject"  style="background-color:#222; padding:5px;  width:200px; color:orange; border:0; opacity:0.8"/></textarea>
</td>
</tr>
</table>
<p> <br> </p>
<legend> Details of Guests </legend>

<table width="95%" cellpadding="5px" cellspacing="5px" id="table">
<tr>
	<td width="34%"> Name </td>
	<td width="20%"> Gender </td>
	<td width="20%"> Age </td>
	<td width="20%"> Relationship </td>
	<td width="6%"></td> <br />
	
</tr>

<tr id="row1">
	<td> <input  type="text" name="name[]" onBlur='updateDOM(this)' style="background-color:#222; padding:5px;  height:17px; width:200px; color:orange; opacity:0.8; border:0;"/> </td>
	<td> <select name="gender[]" onBlur='updateDOM(this)' style="background-color:#222; height:25px; width:80px; font-size:14px; color:orange; text-align:center;">
		<option selected>Male</option>
		<option>Female</option> 
	</td>
	<td> <input  type="text" name="age[]" onBlur='updateDOM(this)' style="background-color:#222; padding:5px;  height:17px; width:50px; color:orange; border:0; opacity:0.8;"/> </td>
	<td> <input  type="text" name="rel[]" onBlur='updateDOM(this)' style="background-color:#222; padding:5px;  height:17px; width:200px; color:orange; border:0; opacity:0.8;"/> </td>
	<td> <input type="button" onclick="removeFormField(this)" value="Remove" /> </td>
</tr>

</table>
	<p id="limit"> <input type="button" onclick="addInput()" name="add" value="Add" id="add_button" style="float:left; margin-right:20px"/> </p>
<input type="submit" value="Submit">
</form> 
<br><br>
Cancellation procedure:<br>
# Click 'Reply all' option from the booking confirmation mail received on
your GPO mailbox and state your cancellation.<br>
# Cancellation is permitted only till the day before Entry date mentioned
in your booking details.<br>
# Contact gsecha@iitb.ac.in if you are facing any kind of problem. <br>
</font>
</div>

<!--onclick="addInput()"-->
</body>
</html>
