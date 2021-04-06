<!DOCTYPE html>
<html>
<head>
<title>Signup form </title>
<link rel="shortcut icon" href="javaPic1.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script type="text/javascript" src="validat.js"></script>
<style>
	
body {
  font-family: Arial;
  color: white;
  overflow: scroll;
}
.dark-mode 
{
  background-color: blue;
  color: white;
}
.left {
  left: 0;
  width:10%;
  height:1000px;
  margin-top:7%;
  position: absolute;
  background-color: #123;
}
.left a {
	color:white;
    text-decoration:none;
}
.top {
  left: 0;
  top:0;
  position: absolute;
  width:100%;
  background-color: #112;
}
.right {
  right: 0;
  margin-top:7%;
  position: absolute;
  width:90%;
  height:1000px;
  background-color: tomato;
}
.top img {
  width: 190px;
  border-radius: 60%;
}
.top h2 {
	float:right;
    width:40%
}
#image2 {
	float:right;
}
#star {
	color:black;
}
#dob {
	width:12%;
}
.msgBlock{
	color:black;
	float:left;
	width:96%;
}

table
{
	margin-top: 2%;
	margin-left: 6%;
	border: 1px solid white;
	border-collapse: collapse;
}
th
{
	height: 5%;
	color: white;
	background-color: black;
	border: 1px solid white;
}
td
{
	
	text-align: center;
	color: black;
	border: 1px solid white;
}
#signup
{
	margin-left: 45.5%;
	margin-top: 1%;
	width: 15%;
	background-color: lightblue;
}
.dropbtn {
  background-color: white;
  color: black;
  padding: 2px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content button {
  color: black;
  padding: 2px 6px;
  text-decoration: none;
  display: block;
}
.dropdown:hover .dropdown-content {display: block;}
.dropdown-content button:hover {background-color: lightgreen;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<script src="validat.js">
</script>
</head>

<body onload="Focus()">
<div class="split top" id="top">
<img src="javaPic.jpg">
<img id="image2" src="javaPic1.png">
<h2>SignUp Form</h2>
</div>

<div class="split left" id="left">
<pre>

  <a href="https://www.google.com/intl/en-GB/gmail/about/#" >Gmail</a>
  
  <a href="https://www.linkedin.com/login" >LinkedIn</a>
  
  <a href="https://www.w3schools.com/" >W3 Sch.</a>
</pre>
</div>


<div class="split right" id="right" name="right">
<?php
  include "right.php";
?>
<form name="form1" onchange="return formValidate()"  onsubmit="return formValidate()"  action="./db.php" method="post">
	<div style="float: left;width: 30%;height: 1000px; margin-top: 1px;margin-left: 1px">
  
<pre><center>
	<h1>Bio Data</h1>
	<p id="star">* Required Fields</p>
  First Name*	:<input type="text" id="fname" name="fname" >
  <div class ="msgBlock" id="alert1"></div>
  Last Name*	:<input type="text" id="lname" name="lname">
  <div class ="msgBlock" id="alert2"></div>
  DOB*		:<input type="date" id="dob" name="dob"style="width: 40%">
  <div class ="msgBlock" id="alert3"></div>
  Mobile No.*	:<input type="mobileNo" id="mobileNo" name="mobileNo" maxlength="10" onkeypress="return isNumber(event)" />
  <div class ="msgBlock" id="alert4"></div>
  Email*	:<input type="text" id="email" name="email">
  <div class ="msgBlock" id="alert5"></div>
  Address	:<textarea id="address"name="address" style="width:40%" placeholder="Permanent Address"></textarea>
  
  Education*	:<input type="checkbox" id="ten" name="Edu[]" value="10th" >10th   <input type="checkbox" id="twel" name="Edu[]"  value="12th">12th   <input type="checkbox" id="ug" name="Edu[]" value="UG">UG 
  <div class ="msgBlock" id="alert7"></div>
  Key Skills	:<select name="skils" style="width:40%">
        <optgroup label="Programing">
			<option value="No">No</option>
            <option value="C">C</option>
            <option value="C++">C++</option>
            <option value="C#">C#</option>
            <option value="Java">Java</option>
			<option value="Others">Others</option>
        </optgroup>
        <optgroup label="Scripting">
			<option value="No">No</option>
            <option value="Java Script">Java Script</option>
            <option value="PHP">PHP</option>
            <option value="Angular JS">Angular JS</option>
            <option value="React JS">React JS</option>
			<option value="Others">Others</option>
        </optgroup>
    </select><br>
  Gender*   :<input type="radio" id="male" name="gender" value="M" >M <input type="radio" id="female"value="FM" name="gender" >FM <input type="radio" id="others" value="Others" name="gender" >Others
  <div class ="msgBlock" id="alert6"></div>
  <input type="checkbox" id="terms">I accept <a href="" >Terms & Conditions</a>
  <div class ="msgBlock" id="alert8"></div>

</div>
<div id = "display" style="float: right;width: 69.5%;height: 80%;margin-top: 155px;margin-right: : 1px">
	<table id="UserDetails">
		<tr>
			<th>Course</th>
			<th>Name of the Institute</th>
			<th>Year of Passing</th>
			<th>Percentage Gained</th>
			<th><input type="button" id="Increment" value="Action (+)" name="Increment"/></th>
		</tr>
		<tr id="r0">
			<td><input type="text" name="Course[]" required="required" /></td>
			<td><input type="text" name="Institute[]" required="required" /></td>
			<td><input type="text" name="YearOfPassing[]" required="required" /></td>
			<td><input type="text" name="Percentage[]" required="required" /></td>
			<td><input style="background-color: solid black;" id="Decrement" type="button" value="(-)" name="Decrement" /></td>

		</tr>
	</table>
</div>
</center></pre>
<button id="signup" name="signup" type="submit" onclick="formValidate1()">SignUp</button>
</form>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	$(document).ready(function() 
	{
     $("#Increment").click(function()
     {
       var rows = "<tr>";
       rows += "<td><input type='text' name='Course[]' Required></td>";
       rows += "<td><input type='text' name='Institute[]' Required></td>";
       rows += "<td><input type='text' name='YearOfPassing[]' Required></td>";
       rows += "<td><input type='text' name='Percentage[]' Required></td>";
       rows += "<td><input style='background-color: solid black;' id='Decrement' type='button' value='(-)'' name='Decrement' ></td>";
       rows += "</tr>";

      $('#UserDetails').append(rows);
  	});
	});
	$(document).on('click','#Decrement',function()
	{
		$(this).parents('tr').remove();
	});
</script>
</body>
</html> 
