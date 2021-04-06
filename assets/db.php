<html>
<head>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.right 
	{
  		right: 0;
  		margin-top:7.65%;
  		position: absolute;
  		width:90%;
  		height:1000px;
  		background-color: tomato;
}
table
{
	margin-top: 4%;
	border: 1px solid white;
	border-collapse: collapse;
}
th
{
	height: 5%;
	color: white;
	column-span: 1;
	background-color: black;
	border: 1px solid white;
}
td
{
	
	text-align: center;
	color: black;
	border: 1px solid white;
}
.btn
{
	background-color: lightgreen;
}
a
{
	text-decoration: none;
	color: black;
}
#add
{
	float: right;
	padding: 1% 2%;
}
</style>
</head>
<?php

require "template.php";
require "top.php";
?>
<body>

<div class="right">	
<?php 
	$conn = mysqli_connect("localhost","root","","sreenath") or die("Server Timed Out");
	if (isset($_POST['signup']))
	{
		// echo '<pre>',print_r($_POST),'</pre>';
		$Fname = $_POST['fname'];
		$Lname = $_POST['lname'];
		$Dob = $_POST['dob'];
		$mobile = $_POST['mobileNo'];
		$Email = $_POST['email'];
		$Address = $_POST['address'];
		$Edu = implode(",", $_POST['Edu']);
		$KeySkils = $_POST['skils'];
		$Gender = $_POST['gender'];
		$query = "INSERT INTO reg_details(Fname, Lname, DOB, Mobile, Email, Address, Education,KeySkills, Gender) VALUES ('$Fname','$Lname','$Dob','$mobile','$Email','$Address','$Edu','$KeySkils','$Gender')";

	$execute = mysqli_query($conn,$query);
	$PrimaryId = mysqli_insert_id($conn);
	
	
	if(!$execute)
	{
		die ("Server timed out ". mysqli_error($conn));
	}
	else
	{
		echo "Registered Successfully";
	}
	for($i = 0; $i<count($_POST['Course']); $i++)
	{
		$Course = $_POST['Course'][$i];
		$NameOfInstitute = $_POST['Institute'][$i];
		$YearOfPassing = $_POST['YearOfPassing'][$i];
		$Percentage = $_POST['Percentage'][$i];

		$UserQuery = "INSERT into educationdetails(EmployeUId,Course,InstituteName,YearOfPassing,Percentage) values('$PrimaryId','$Course','$NameOfInstitute','$YearOfPassing','$Percentage')";
		$UserDetails = mysqli_query($conn,$UserQuery);

	}
	if(!$UserDetails)
	{
		die ("Server timed out ". mysqli_error($conn));
	}
	else
	{
		echo "Employee Course Details Entered";
	}
	}
	// include "retrieve.php";
?>
<form action="index1.php"><button id="add">Add</button></form>
<?php
$select_query = mysqli_query($conn,"SELECT * FROM reg_details");
	$numberofrows = mysqli_num_rows($select_query);
	if ($numberofrows > 0) 
	{
		echo "<center><table>
				<tr>
					<th>S.No</th>
					<th>EmployeUId</th>
					<th>FirstName</th>
					<th>LastName</th>
					<th>DOB</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Address</th>
					<th>Education</th>
					<th>KeySkills</th>
					<th>Gender</th>
					<th>Action</th>
					
				</tr>";
				$i=1;
  		while($numberofrows > 0) 
  		{
  			$result = mysqli_fetch_assoc($select_query);
  			$id=$result["EmployeUId"];
    		echo "<tr>
    				<td>".$i."</td>
    				<td>".$result["EmployeUId"]."</td>
    				<td>". $result["Fname"]. "</td>
    				<td>" . $result["Lname"]. "</td>
    				<td> " . $result["DOB"]. "</td>
    				<td> " . $result["Mobile"]. "</td>
    				<td> ". $result["Email"]."</td>
    				<td>".$result["Address"]."</td>
    				<td>". $result["Education"]."</td>
    				<td> ".$result["KeySkills"]."</td>
    				<td>".$result["Gender"]."</td>"
    				
    			?>
    				<td class='btn'><a onClick=" return confirm('Please confirm deletion');" href='delete.php?EmployeUId=<?=$result["EmployeUId"];?>' name='delete'>Delete |</a>
    				<a href='./update.php?EmployeUId=<?=$result["EmployeUId"];?>' name='edit' value=''>Edit |</a>
    				
    					<button type="button" data-id='<?=$result["EmployeUId"];?>' class="userinfo" data-toggle="modal" data-target="#myModal">View
    					</button>
    				</td>
    			</tr>
  						



    			<?php
    			include "modal.php";
    		$numberofrows--;
    		$i++;
  		}
  		echo "</table></center>";
	}
	else 
	{
  		echo "No Data Found";
	}

	mysqli_close($conn);
?>

</div>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="modalAjax.js"></script>
</body>
</html>
