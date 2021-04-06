<!DOCTYPE html>
<html>
<head>
<title>Signup form </title>
<link rel="shortcut icon" href="javaPic1.png" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
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
  margin-top:4.75%;
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
    width:12.4%;
}
.msgBlock{
    color:black;
    float:left;
    width:96%;
}
#themes
{
    display:none;
    float:right;
    list-style-type: none;
}
#email
{
    width: 12%;
}
#fname
{
    width: 12.5%;
}
#mobileNo
{
}
/*input
{
  width: 180px;
}*/
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
</style>
<?php
$id = $_GET['EmployeUId'];
$conn = mysqli_connect("localhost","root","","sreenath") or die("Server Timed Out");
$query = mysqli_query($conn,"SELECT * FROM reg_details WHERE EmployeUId='$id'");

$query1 = mysqli_query($conn,"SELECT * FROM educationdetails WHERE EmployeUId='$id'");
$result = mysqli_fetch_array($query);

$result1[] = mysqli_fetch_array($query1);



if(isset($_POST['update']))
{ 
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Dob = $_POST['dob'];
    $mobile = $_POST['mobileNo'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Edu = implode(", ", $_POST['Edu']);
    $KeySkils = $_POST['skils'];
    $Gender = $_POST['gender'];
    
    $update = mysqli_query($conn,"UPDATE reg_details SET Fname= '$Fname' , Lname= '$Lname' , DOB= '$Dob' , Mobile= '$mobile' , Email= '$Email' , Address= '$Address' , Education= '$Edu' , KeySkills= '$KeySkils' , Gender= '$Gender' WHERE EmployeUId ='$id'");
    $del = "DELETE FROM educationdetails WHERE EmployeUId='$id'";
    $ResultDelete = mysqli_query($conn,$del);
    for($i=0;$i<count($_POST['Course']);$i++)
    {
        $Course = $_POST['Course'][$i];
        $Institute = $_POST['Institute'][$i];
        $YOP = $_POST['YearOfPassing'][$i];
        $Percentage = $_POST['Percentage'][$i];
        $insert = "INSERT into educationdetails(EmployeUId,Course,InstituteName,YearOfPassing,Percentage) VALUES ('$id','$Course','$Institute','$YOP','$Percentage')";
        $ResultInsert = mysqli_query($conn,$insert);
    }
        if($update)
        {
            mysqli_close($conn);
            header("location:db.php");
            exit;
        }
        else
        {
            echo mysqli_error($conn);
        }       
}
?>
<script src="validat.js"></script>
</head>
<?php
  require "top.php";
  require "template.php";
?>
<body onload="Focus()">

<div class="split right"  id="right" name="right">
<?php 
include "right.php";
?>
    <pre><center>
<h3>Update Details</h3>
<form  onchange="return formValidate()"  onsubmit="return formValidate()" method="POST" >
  First Name*      :<input type="text" id="fname" name="fname" value="<?php echo $result['Fname'] ;?>">
  <div class ="msgBlock" id="alert1"></div>
  Last Name*       :<input type="text" style="width: 12.5%" id="lname" name="lname" value="<?php echo $result['Lname'] ;?>">
  <div class ="msgBlock" id="alert2"></div>
  DOB*             :<input type="date" id="dob" name="dob" value="<?php echo $result['DOB'] ;?>">
  <div class ="msgBlock" id="alert3"></div>
  Mobile No.*      :<input type="mobileNo" id="mobileNo" name="mobileNo" value="<?php echo $result['Mobile'] ;?>" maxlength="10" onkeypress="return isNumber(event)" style="width: 12%"/>
  <div class ="msgBlock" id="alert4"></div>
  Email*           :<input type="text" id="email" name="email" value="<?php echo $result['Email'] ;?>">
  <div class ="msgBlock" id="alert5"></div>
  Address          :<textarea id="address"name="address" style="width:12%" placeholder="Permanent Address"> <?php echo $result['Address'] ;?></textarea><br>
  Education*      :<input type="checkbox" id="ten" name="Edu[]" value='10th' <?php $du=explode(",",$result['Education']); echo in_array('10th',$du)? 'checked="checked"' : '' ;?>>10th  <input type="checkbox" id="twel" name="Edu[]" value="12th" <?php $du=explode(",",$result['Education']); echo in_array(' 12th',$du)?'checked="checked"' : '' ;?>>12th  <input type="checkbox" id="ug" name="Edu[]" value="UG" <?php $du=explode(",",$result['Education']); echo in_array(' UG',$du) ?'checked="checked"' : '' ;?>>UG 
  <div class ="msgBlock" id="alert7"></div>
  Key Skills       :<select name="skils" style="width:12%">
        <optgroup label="Programing">
            <option value="No" <?php echo $result['KeySkills'] == "No" ? 'selected="selected"' : '' ;?>>No</option>
            <option value="C" <?php echo $result['KeySkills'] == "C" ? 'selected="selected"' : '' ;?>>C</option>
            <option value="C++" <?php echo $result['KeySkills'] == "C++" ? 'selected="selected"' : '' ;?>>C++</option>
            <option value="C#" <?php echo $result['KeySkills'] == "C#" ? 'selected="selected"' : '' ;?>>C#</option>
            <option value="Java" <?php echo $result['KeySkills'] == "Java" ? 'selected="selected"' : '' ;?>>Java</option>
            <option value="Others" <?php echo $result['KeySkills'] == "Others" ? 'selected="selected"' : '' ;?>>Others</option>
        </optgroup>
        <optgroup label="Scripting">
            <option value="No" <?php echo $result['KeySkills'] == "No" ? 'selected="selected"' : '' ;?>>No</option>
            <option value="Java Script" <?php echo $result['KeySkills'] == "Java Script" ? 'selected="selected"' : '' ;?>>Java Script</option>
            <option value="PHP" <?php echo $result['KeySkills'] == "PHP" ? 'selected="selected"' : '' ;?>>PHP</option>
            <option value="Angular JS" <?php echo $result['KeySkills'] == "Angular JS" ? 'selected="selected"' : '' ;?>>Angular JS</option>
            <option value="React JS" <?php echo $result['KeySkills'] == "React JS" ? 'selected="selected"' : '' ;?>>React JS</option>
            <option value="Others" <?php echo $result['KeySkills'] == "Others" ? 'selected="selected"' : '' ;?>>Others</option>
        </optgroup>
    </select><br>
  Gender*          :<input type="radio" id="male" name="gender" value="M" <?php echo $result['Gender'] =="M" ? 'checked="checked"' : '' ?>>M <input type="radio" id="female"value="FM" name="gender" <?php echo $result['Gender'] =="FM" ? 'checked="checked"' : '' ?>>FM <input type="radio" id="others" value="Others" name="gender" <?php echo $result['Gender'] == "Others" ? 'checked="checked"' : '' ?>>Others
  <div class ="msgBlock" id="alert6"></div>
  <table id="UserDetails">
    <tr>
        <th>Course</th>
        <th>Instiute</th>
        <th>YearOfPassing</th>
        <th>Percentage</th>
        <th><button type="buytton" id="Increment">Action(+)</button></th>
    </tr>
    <?php
        $ResultSelect =mysqli_query($conn,"SELECT * FROM educationdetails WHERE EmployeUid='$id'");
        $r=array();
        while ($res=mysqli_fetch_assoc($ResultSelect))
        {
            $r[]=$res;
        }
        foreach ($r as $res)
        {
    ?>
        <tr>
            <td><input name="Course[]" type="text" value="<?php echo $res['Course'];?>" Required></td>
            <td><input name="Institute[]" type="text" value="<?php echo $res['InstituteName'];?>" Required></td>
            <td><input name="YearOfPassing[]" type="text" value="<?php echo $res['YearOfPassing'];?>" Required></td>
            <td><input name="Percentage[]" type="text" value="<?php echo $res['Percentage'];?>" Required></td>
            <td><button type="button" name="bt" id="Decrement" >(-)</button></td>
        </tr>
    <?php 
        }
    ?>
    </table>
                    <button  name="update" value="Update">Submit</button>
</form>
</center>
</pre>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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

    // window.location = "<?php //echo base_url();?>RegisterForm/retrieve";
</script> 
</body>

</html> 
