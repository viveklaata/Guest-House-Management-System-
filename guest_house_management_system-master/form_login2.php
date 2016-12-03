<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Guest House IIT Jodhpur</title>
        
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <script src="js/modernizr.custom.63321.js"></script>
      
		<style>
			body {
				background: #e1c192 url(images/bg3.jpg);
				-webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
			}
		</style>
    </head>
    <body>
        <div class="container">
			<header>
				<h1><strong>Guest Accomodation Booking Form</strong> </h1>
				<h2>Guest Users</h2>
			</header>
			
			<section class="main">
				<form class="form-2" method="POST" name="form1" onsubmit="return validate()" action="login2.php"  >
					<h1><span class="log-in">Your Details</span></h1>
					<p >
						<label for="login">Govt Issued Id Card No.</label>
						<input type="text" name="id_card_no">
					</p>
					<p class="float">
						<label for="login">name</label>
						<input type="text" name="name[]" placeholder="Name">
					</p>
					<p class="float">
						<label for="password">Relationship</label>
						<input type="text" name="rel[]" placeholder="eg:Father">
					</p>

					<p >
						<label for="login">Address</label>
						<input type="text" name="address" >
					</p>

					<p class="float">
						<label for="login">Phone No.</label>
						<input type="text" name="phone_no" >
					</p>
					<p class="float">
						<label for="password">Email Id</label>
						<input type="text" name="email_id" >
					</p>

					<p class="float">
						<label for="login">Entry Date</label>
						<input type="date" name="entrydate" >
					</p>
					<p class="float">
						<label for="password">Exit Date</label>
						<input type="date" name="exitdate" placeholder="">
					</p>

					<p class="float">
						<label for="login">No. Of Rooms</label>
						<input type="text" name="num_of_rooms" >
					</p>
					<p class="float">
						<label for="password">No. Of Beds</label>
						<input type="text" name="num_of_beds" >
					</p>

					<p class="float" style="margin-bottom: 20px";>
						<label for="login">Age</label>
						<input type="number" name="age[]" placeholder="">
					</p>
					<p class="float" >
						<label for="login">Gender</label>
						<select name = "gender[]" style=" font-family: 'Lato', Calibri, Arial, sans-serif;
    font-size: 13px;
    font-weight: 400;
    display: block;
    width: 100%;
    padding: 5px;
    margin-bottom: 5px;
    border: 3px solid #ebe6e2;
    border-radius: 5px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;">
						<option selected>Male</option>
						<option>Female</option> 
						</select>
					</p>
					<p style="margin-bottom: 300px;"></p>
					<p class="float" style="margin-bottom: 30px;">
						<label for="login">Internet</label>
						<select name = "status_wifi" style=" font-family: 'Lato', Calibri, Arial, sans-serif;
    font-size: 13px;
    font-weight: 400;
    display: block;
    width: 100%;
    padding: 5px;
    margin-bottom: 5px;
    border: 3px solid #ebe6e2;
    border-radius: 5px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;">
						<option selected>Wifi </option>
						<option>No Internet</option> 
						</select>
					</p>
					<p class="float" style="margin-bottom: 30px;">
						<label for="login">Ac or Non Ac</label>
						<select name ="status_ac" style=" font-family: 'Lato', Calibri, Arial, sans-serif;
    font-size: 13px;
    font-weight: 400;
    display: block;
    width: 100%;
    padding: 5px;
    margin-bottom: 5px;
    border: 3px solid #ebe6e2;
    border-radius: 5px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;">
						<option selected>Ac</option>
						<option>Non_Ac</option> 
						</select>
					</p>

					<p style="margin-bottom: 30px;">
						<label for="password">purpose</label>
						<input type="text" name="password" placeholder="">
					</p>
					
					<p class="clearfix"> 
						<input type="submit" value="Submit">   
						
					</p>
				</form>​​
			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class='opt'/>").append(
			            $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder='Password' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
			    });

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});

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
    </body>
</html>