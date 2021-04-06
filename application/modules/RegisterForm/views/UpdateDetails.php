<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<style type="text/css">
		.right 
		{
        right: 0;
        margin-top:7%;
        position: absolute;
        width:100%;
        height:1200px;
        background-color: #efe6e3;
	    }
	    #edu
	    {
	        width: 5%;
	    }
	    #select
	    {
	        width: 37%;
	        background-color: lightblue;
	    }
	    #Update
	    {
	      	/*margin-left: 65%;*/
	        float: right;
	      	margin-top: 1%;
	      	width: 20%;
	      	background-color: lightblue;
	    }
	    #FormView
	    {
	        position: absolute;
	        float: left;
	        width: 30%;
	        height: 1200px; 
	        margin-top: 1px;
	        margin-left:40%;
	        background-color: #efe6d3;
	    }
		table
	    {
	      	margin-top: 4%;
        width: 100%;
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
		.input
	    {
	        width: 100%;
	        background-color: lightblue;
	    }
	    textarea
	    {
	        width:100%;
	        background-color: lightblue;
	    }
	   	label
	    {
	        color: black;
	        float: left;
	    }
	    span
	    {
	        color: black;
	    }
	    h1
	    {
	        color: black;
	    }
	    #Increment
	    {
	    	width: 100%;

	    	color: white;
	    	background-color: blue;
	    }
	    #Decrement
	    {
	    	color: white;
	    	width: 100%;
	    	background-color: red;
	    }
		
	</style>
	<script type="text/javascript" src="<?php echo base_url('assets/validat.js'); ?>"></script>
</head>

<body>
	<div class="split right" id="right" name="right">
		<div id="FormView"><br>
			
			<form name="form1" id="MyForm" onchange="return formValidate()">

	         <h1>Update Data</h1>
	         <!-- <p id="star"><span class="star">*</span> Required Fields</p> -->
	          <input type="hidden" name="uid" value="<?php echo $Data->EmployeUId ;?>">
	          <label for="fname">First Name<span class="star"></span>  :</label><br><input type="text" class="input form-control" id="fname" name="fname" value="<?php echo $Data->Fname; ?>"><br>
	          <div class ="msgBlock" id="alert1"></div>

	          <label for="lname">Last Name<span class="star"></span> :</label><br><input type="text" id="lname" class="input form-control" name="lname" value="<?php echo $Data->Lname; ?>"><br>
	          <div class ="msgBlock" id="alert2"></div>

	          <label for="dob">DOB<span class="star"></span>   :</label><br><input type="date" id="dob" class="input form-control" name="dob" value="<?php echo $Data->DOB; ?>"><br>
	          <div class ="msgBlock" id="alert3"></div>

	          <label for="mobileNo">Mobile No.<span class="star"></span> :</label><br><input type="mobileNo" class="input form-control" id="mobileNo" name="mobileNo" maxlength="10" onkeypress="return isNumber(event)" value="<?php echo $Data->Mobile; ?>" /><br>
	          <div class ="msgBlock" id="alert4"></div>

	          <label for="email">Email<span class="star"></span> :</label><br><input type="text" id="email" class="input form-control" name="email" value="<?php echo $Data->Email; ?>"><br>
	          <div class ="msgBlock" id="alert5"></div>

	          <label for="address">Address  :</label><br><textarea id="address" name="address" class="input form-control"  placeholder="Permanent Address"><?php echo $Data->Address; ?></textarea><br>

	          
	            <label for="edu">Education<span class="star"></span> :</label><input type="checkbox" id="edu" name="Edu[]" value="10th" <?php $du=explode(",",$Data->Education); echo in_array('10th',$du)? 'checked="checked"' : '' ;?>><span>10th</span>  <input type="checkbox" id="edu" name="Edu[]"  value="12th" <?php $du=explode(",",$Data->Education); echo in_array('12th',$du)? 'checked="checked"' : '' ;?>><span>12th</span>   <input type="checkbox" id="edu" name="Edu[]" value="UG" <?php $du=explode(",",$Data->Education); echo in_array('UG',$du)? 'checked="checked"' : '' ;?>><span>UG </span>
	            <div class ="msgBlock" id="alert7"></div><br>
	             
	          
	          <label for="select" style="float: left;">Key Skills:</label>
	            <select name="skils" id="select" >
	              <optgroup label="Programing">
	                 <option value="No" <?php echo $Data->KeySkills == "No" ? 'selected="selected"' : '' ;?>>No</option>
	                  <option value="C" <?php echo $Data->KeySkills == "C" ? 'selected="selected"' : '' ;?>>C</option>
	                  <option value="C++" <?php echo $Data->KeySkills == "C++" ? 'selected="selected"' : '' ;?>>C++</option>
	                  <option value="C#" <?php echo $Data->KeySkills == "C#" ? 'selected="selected"' : '' ;?>>C#</option>
	                  <option value="Java" <?php echo $Data->KeySkills == "Java" ? 'selected="selected"' : '' ;?>>Java</option>
	                 <option value="Others" <?php echo $Data->KeySkills == "Others" ? 'selected="selected"' : '' ;?>>Others</option>
	              </optgroup>
	              <optgroup label="Scripting">
	                 <option value="No" <?php echo $Data->KeySkills == "No" ? 'selected="selected"' : '' ;?>>No</option>
	                  <option value="Java Script" <?php echo $Data->KeySkills == "Java Script" ? 'selected="selected"' : '' ;?>>Java Script</option>
	                  <option value="PHP" <?php echo $Data->KeySkills == "PHP" ? 'selected="selected"' : '' ;?>>PHP</option>
	                  <option value="Angular JS" <?php echo $Data->KeySkills == "Angular JS" ? 'selected="selected"' : '' ;?>>Angular JS</option>
	                  <option value="React JS" <?php echo $Data->KeySkills == "React JS" ? 'selected="selected"' : '' ;?>>React JS</option>
	                 <option value="Others" <?php echo $Data->KeySkills == "Others" ? 'selected="selected"' : '' ;?>>Others</option>
	              </optgroup>
	            </select><br><br>
	      
	          <label for="gender">Gender<span class="star"></span>     :</label><input type="radio" id="male" class="gender" name="gender" value="M" <?php echo $Data->Gender =="M" ? 'checked="checked"' : '' ?>><span>M</span><input type="radio" class="gender" id="female"value="FM" name="gender" <?php echo $Data->Gender =="FM" ? 'checked="checked"' : '' ?>><span>FM</span><input type="radio" class="gender" id="Others" value="gender" name="gender" <?php echo $Data->Gender =="Others" ? 'checked="checked"' : '' ?>><span>Others</span><br><br>
	          <div class ="msgBlock" id="alert6"></div>
	     	
	          	<table id="UserDetails" >
		            <tr>
		              <th>Course</th>
		              <th>Institute Name</th>
		              <th>Year of Passing</th>
		              <th>Percentage</th>
		              <th><button type="button" id="Increment" name="Increment">Add(+)</button></th>
		            </tr>

		            <?php
			            foreach ($EduData as $key => $value)
			            {
			        		?>
					            <tr id="r0">
					              <td><input type="text" class="input form-control" name="Course[]" required="required" value="<?php echo $EduData[$key]->Course;?>" /></td>
					              <td><input type="text" class="input form-control" name="Institute[]" required="required" value="<?php echo $EduData[$key]->InstituteName;?>"/></td>
					              <td><input type="text" class="input form-control" name="YearOfPassing[]" required="required" value="<?php echo $EduData[$key]->YearOfPassing;?>"/></td>
					              <td><input type="text" class="input form-control" name="Percentage[]" required="required" value="<?php echo $EduData[$key]->Percentage;?>"/></td>
					              <td><button id="Decrement" class="form-control" type="button" name="Decrement" value="<?php echo $EduData[$key]->Course;?>">(-)</button></td>
					            </tr>
				            <?php
			            }
		            		?>
	          	</table>
	          <button id="Update" type="button" name="signup">Update</button>
	        </form>
	        
	    </div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

	<script type="text/javascript">
      
    	$(document).ready(function() 
    	{
	        $("#Increment").click(function()
	         {
	             var rows = "<tr>";
	             rows += "<td><input class='form-control' type='text' name='Course[]' Required></td>";
	             rows += "<td><input class='form-control' type='text' name='Institute[]' Required></td>";
	             rows += "<td><input class='form-control' type='text' name='YearOfPassing[]' Required></td>";
	             rows += "<td><input class='form-control' type='text' name='Percentage[]' Required></td>";
	             rows += "<td><button class='form-control' style='background-color: solid red;' id='Decrement' type='button' name='Decrement' >(-)</button></td>";
	             rows += "</tr>";

	              $('#UserDetails').append(rows);
	        });
	        $(document).on('click','#Decrement',function()
	        {
	             $(this).parents('tr').remove();
	        });


    		$('#Update').click(function()
	        {
	            var FormData = $('#MyForm').serialize();
	            // console.log(FormData);

	            $.ajax({
	                type: 'post',
	                url: '<?php echo base_url()?>RegisterForm/UpdateDetail',
	                data: FormData,
	                dataType: 'json',
	                //cache: false,
	                success: function () 
	                {
	                  
	                  //$('#MyForm')[0].reset();
	                  if(confirm("Successfuly Updated ==> View List Page"))
                  	  {
                  	  	window.location = "<?php echo base_url();?>RegisterForm/index";
                  	  }
	                }
	        	});
	         });
    	});
    </script>
</body>