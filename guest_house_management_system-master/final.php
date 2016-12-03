<?php
session_start();
include "config.php";
include "database.php";
include "billing.php";
//$category_id=$_GET["category_id"];

$num_of_rooms=$_SESSION["num_of_rooms"];  
//print_r($_SESSION); 
$today = date("Y-m-d");
//echo $today;

 /*   $result = mysqli_query($con, "select * from room_details where category_id='".$category_id."' AND (end_date <='".$_SESSION["start_date"]."' OR start_date>='".$_SESSION["end_date"]."')");*/
 $result = mysqli_query($con, "select * from room_details where Type='".$_SESSION["room_type"]."'");
	$fetch = mysqli_fetch_assoc($result);
	$num = mysqli_num_rows($result);
	$prize=$fetch["Prize"];
		//echo "vivek";
		$date1=date_create($_SESSION["start_date"]);
		$date2=date_create($_SESSION["end_date"]);
		//echo $_SESSION["end_date"];

		$days=date_diff($date1,$date2)->days;
		//$total_price=$_SESSION["num_of_rooms"]*$days*$prize;
		//echo $days;
		$obj= new billing;
		//echo $obj->Payment_calc($prize,$num_of_rooms,$days);
		//echo $total_price;
	
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;

}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>

<h2>Order Details</h2>

<table>
  <tr>
    <th>Total Ammount</th>
    <th><?php echo $obj->Payment_calc($prize,$num_of_rooms,$days); ?></th>
    
  </tr>
  <tr>
    <td>Total Rooms</td>
    <td><?php echo $num_of_rooms ?></td>
  
  </tr>
  <tr>
    <td>Total Guests</td>
    <td><?php echo $_SESSION["num_of_guests"] ?></td>
    
  </tr>
  <tr>
    <td>Start Date</td>
    <td><?php echo $_SESSION["start_date"];  ?></td>
    
  </tr>
  <tr>
    <td>End Date</td>
    <td><?php echo $_SESSION["end_date"];  ?></td>
    
</tr>
<tr>
    <td>Number of Days</td>
    <td><?php echo $days;  ?></td>
    
</tr>
</table>

<button class="button" type="button" onclick="window.location.href='requirements_registered.php'">Send Request</button>

</body>
</html>
