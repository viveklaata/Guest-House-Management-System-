<?php
include "config.php";
include "database.php";



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Mirrored from gymkhana.iitb.ac.in/~hostels/hostels.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2016 14:12:02 GMT -->
<head>

	<link rel="icon" type="image/vnd.microsoft.icon" href="icon.html">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="_your description goes here_" />
<meta name="keywords" content="_your,keywords,goes,here_" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" title="style (screen)" />
<title>Hostel Affairs(HA)</title>
<!--[if lte IE 6]>
<style type="text/css">
html, body
	{
	height: 100%;
	overflow: auto;
	}
#left {
	position: absolute; left: 0;
	width: 35%;
}

</style>
<![endif]-->
</head>

<body>

<!--	<a class="nav" href="elections.html">Hostel Constitution</a> -->
  
    <!-- <a class="nav" href="ir.html">International Relations</a> -->
  <!--  <a class="nav" href="institute.html">Know your institute</a>

    <a class="nav" href="progress.html">Work Progress</a> -->
   <!--  <a class="nav" href="http://www.iitb.ac.in/facilities/hospital.html">Hospital</a>
    <a class="nav" href="Hospital_Guidebook.pdf">Hospital Guidebook</a>
    <a class="nav" href="hostels.html">Hostels</a>
	<a class="nav" href="lostnfound.html">Lost n Found Forum</a>
    <a class="nav" href="http://gymkhana.iitb.ac.in/cms_new/">Complaint Management System</a> -->
 <!-- 	<a class="nav" href="lostnfound.php">Lost n Found Forum</a> -->
  <!-- <a class="nav" href="guest.html">Guest Accomodation Booking System</a>

  <a class="nav" href="http://www.iitb.ac.in/GuestHouse/index.html">Guest House Booking System</a>
  <a class="nav" href="delivery.html">Hostel Delivery</a>
  <a href="BusSchedule.pdf" class="nav" target="_blank">TumTum Schedule</a>
  <a href="Canteen_Regulations.pdf" class="nav" target="_blank">Canteen Regulations</a>
    <br/><br/>
 </div>
</div> -->


<div id="main">



<!--
<div align="center" style="font-size:24px; "><font size="+5">H</font>ostel <font size="+5">A</font>rena</div>
<br /><br/>   
<img src="bg_home.png" width="800" />

<table width="100%" border="1" style="background-image:url(bg_home.png); background-position:center; background-repeat:no-repeat">
  <tr>
    <td align="center" ><img src="hostels_img/h1.png" width="40"/></td>
    <td align="left" width="100%"><font size="+2" color="#B4B4B4" style="font-style:italic">"The enlighted One"</font></td>
  </tr>
  <tr>
    <td align="center" ><img src="hostels_img/h1.png" width="40"/></td>
    <td align="left" width="100%"><font size="+2" color="#B4B4B4" style="font-style:italic">"The enlighted One"</font></td>
  </tr>
  <tr>
    <td align="center" ><img src="hostels_img/h1.png" width="40"/></td>
    <td align="left" width="100%"><font size="+2" color="#B4B4B4" style="font-style:italic">"The enlighted One"</font></td>
  </tr>
  <tr>
    <td align="center" ><img src="hostels_img/h1.png" width="40"/></td>
    <td align="left" width="100%"><font size="+2" color="#B4B4B4" style="font-style:italic">"The enlighted One"</font></td>
  </tr>
  <tr>
    <td ><img src="hostels_img/h5.png" width="70"/></td>
    <td width="100%"><font size="+3">   "The enlighted One"</font></td>
  </tr>
  <tr>
    <td ><img src="hostels_img/h6.png" width="70"/></td>
    <td width="100%"><font size="+3">   "Vikings"</font></td>
  </tr>
  <tr>
    <td ><img src="hostels_img/h7.png" width="70"/></td>
    <td width="100%"><font size="+3">   "Lady of the Lake"</font></td>
  </tr>
  <tr>
    <td ><img src="hostels_img/h8.png" width="70"/></td>
    <td width="100%"><font size="+3">  &nbsp; "Woodland"</font></td>
  </tr>
</table>

-->









<table width="700" border="0" align="center" height="446"  style="text-align:center">
  <tr> 
	<th> </th>
    <th scope="col" align="center"><h2 style="color:#ff7c11">Type</h2></th>
    <th scope="col" align="center"><h2 style="color:#ff7c11">price</h2></th>
    <th scope="col" align="center"><h2 style="color:#ff7c11">Facility  </h2></th>
    <th scope="col" align="center"><h2 style="color:#ff7c11">Select</h2></th> 
  </tr>
<?php

$result = mysqli_query($con, "select * from category");
while($fetch = mysqli_fetch_assoc($result))
{
?> 
  <tr>
  <td>
    <?php
    $image="uploads/".$fetch["photo"].".jpg";
    ?>
    <img src="<?php echo $image;  ?>" alt="Mountain View" style="width:100px;height:100px;">

</td> 
  <td><a href="http://gymkhana.iitb.ac.in/~hostel1/"><?php echo $fetch["name"] ?></a></td>
    <td><?php echo $fetch["price"];   ?></td>
  <!--<td><img align= "center" src="kamath.jpg" height="90px" width="90px"></td>-->
    <td align="center"><?php echo $fetch["AC"];  ?></td>
    <td align="center"><table cellspacing="0" cellpadding="0">
      <tr>
        <!-- <td height="20" align="right">9167275603</td> -->
        <input type="submit" value="Proceed" 
    onclick="window.location='final.php?category_id=<?php echo $fetch["category_id"] ?>';" /> 
      </tr>
    </table></td>
  </tr>
  <?php
}
?>
</table>






<span class="credit">  &copy;2009 | Designed by Vivek Jhunjhunwala and Rahul Yadav | Adapted by Vivek Tirunagiri</a></span>
	</div>


 </div>
</body>


<!-- Mirrored from gymkhana.iitb.ac.in/~hostels/hostels.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2016 14:15:15 GMT -->
</html>
