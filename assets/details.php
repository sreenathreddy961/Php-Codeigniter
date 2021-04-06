<html>
<style>
	.right 
	{
  		right: 0;
  		margin-top:7%;
  		position: absolute;
  		width:90%;
  		height:100%;
  		background-color: tomato;
}
</style>
<?php 
require "template.php";
require "top.php";
?>
<div class="right">
<?php
$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Dob = $_POST['dob'];
$mobile = $_POST['mobileNo'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Edu = $_POST['edu'];
$KeySkils = $_POST['skils'];
$Gender = $_POST['gender'];
echo "<br>First Name : ".$Fname;
echo "<br><br>Last name : ".$Lname;
echo "<br><br>DOB : ".$Dob;
echo "<br><br>Mobile Number : ".$mobile;
echo "<br><br>Email : ".$Email;
echo "<br><br>Address : ".$Address;
echo "<br><br>Education : ".$Edu;
echo "<br><br>Key Skills : ".$KeySkils;
echo "<br><br>Gender : ".$Gender;
?>
</div>
</html>