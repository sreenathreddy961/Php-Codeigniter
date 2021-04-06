<!DOCTYPE html>
<html>
  <head>
    <title>Signup form </title>
    <link rel="shortcut icon" href="assets/javaPic1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <style>
      
      body 
      {
        font-family: Arial;
        /*color: white;*/
        background-color: #f3e3c2;
        overflow: scroll;
      }
      .dark-mode 
      {
        background-color: blue;
        color: white;
      }
      
      .right {
        right: 0;
        margin-top:7%;
        position: absolute;
        width:90%;
        height:1200px;
        background-color: #f3e3c2;
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
      .star
      {
        color: red;
      }
      /*#dob {
        width:12%;
      }*/
      .msgBlock{
        color:red;
        float:left;
      }
      #list
      {
        text-decoration: none;
      }
      table
      {
        margin-top: 4%;
        width: 90%;
        padding: 0px;
        border: 1px solid white;
        border-collapse: collapse;
      }
      th
      {
        height: 5%;
        color: white;
        column-span: 1;
        background-color: black;
        border: 1px solid red;
        padding: 0px;
      }
      td
      {
        padding: 0px;
        text-align: left;
        color: black;
        border: 1px solid black;
      }
      input
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
      /*.gender
      {
        width: 7%;
      }*/
      #edu
      {
        width: 5%;
      }
      #select
      {
        width: 37%;
        background-color: lightblue;
      }
      #signup
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
        width: 25%;
        height: 1200px; 
        margin-top: 1px;
        margin-left: 1px;
        background-color: #efe6d3;
      }
      #DetailsView
      {
        /*left:350px;*/
        width: 75%;
        background-color: #FAF0E6;
        float: right;
        height:1200px;
        /*position: fixed;*/
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

  </head>

  <body onload="Focus()">

    <div class="split right" id="right" name="right">
      <div id="FormView"><br>
        <!-- <button id="list"><a href="<?php //echo site_url('RegisterForm/index'); ?>">Show List</a></button> -->

        <form name="form1" id="MyForm" onchange="return formValidate()" action="<?php echo base_url('Sample/post_validate');?>" method="post">

         <h1>Bio Data</h1>
         <p id="star"><span class="star">*</span> Required Fields</p>

          <label for="fname">First Name<span class="star">*</span>  :</label><br><input type="text" id="fname" name="first_name"  placeholder="First Name"><br>
          <div class ="msgBlock" id="alert1">
          <?php echo form_error('fast_name'); ?></div> <br>

          <label for="lname">Last Name<span class="star">*</span> :</label><br><input type="text" id="lname" name="last_name" placeholder="LastName"><br>
          <div class ="msgBlock" id="alert2">
          <?php echo form_error('last_name'); ?></div> <br>

          <label for="dob">DOB<span class="star">*</span>   :</label><br><input type="date" id="dob" name="dob" ><br>
          <div class ="msgBlock" id="alert3"></div><br>

          <label for="mobileNo">Mobile No.<span class="star">*</span> :</label><br><input type="mobileNo" id="mobileNo" name="contact_no" maxlength="10" onkeypress="return isNumber(event)" placeholder="Contact No"/><br>
          <div class ="msgBlock" id="alert4">
          <?php echo form_error('contact_no'); ?> </div><br>

          <label for="email">Email<span class="star">*</span> :</label><br><input type="text" id="email" name="email" placeholder="Email"><br>
          <div class ="msgBlock" id="alert5">
          <?php echo form_error('email'); ?></div> <br>

          <label for="address">Address  :</label><br><textarea id="address" name="address"  placeholder="Permanent Address"></textarea><br><br>

          
            <label for="edu">Education<span class="star">*</span> :</label><input type="checkbox" id="edu" name="Edu[]" value="10th"><span>10th</span>  <input type="checkbox" id="edu" name="Edu[]"  value="12th"><span>12th</span>   <input type="checkbox" id="edu" name="Edu[]" value="UG"><span>UG </span>
            <div class ="msgBlock" id="alert7"></div><br><br>
             
          
          <label for="select" style="float: left;">Key Skills:</label>
            <select name="skils" id="select" >
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
            </select><br><br>
      
          <label for="gender">Gender<span class="star">*</span>     :</label><input type="radio" id="male" class="gender" name="gender" value="M" ><span>M</span><input type="radio" class="gender" id="female"value="FM" name="gender" ><span>FM</span><input type="radio" class="gender" id="Others" value="gender" name="gender" ><span>Others</span><br><br>
          <div class ="msgBlock" id="alert6"></div><br>
      
         <!--  <table id="UserDetails" >
            <tr>
              <th>Course</th>
              <th>Institute Name</th>
              <th>Year of Passing</th>
              <th>Percentage</th>
              <th><input type="button" id="Increment" value="Action (+)" name="Increment"/></th>
            </tr>
            <tr id="r0">
              <td><input type="text" name="Course[]"  /></td>
              <td><input type="text" name="Institute[]" /></td>
              <td><input type="text" name="YearOfPassing[]" /></td>
              <td><input type="text" name="Percentage[]" /></td>
              <td><input style="background-color: solid black;" id="Decrement" type="button" value="(-)" name="Decrement" /></td>
            </tr>
          </table><br> -->

          <input type="checkbox" id="terms" style="width: 5%"><span>I accept </span><a href="" >Terms & Conditions</a>
          <div class ="msgBlock" id="alert8"></div><br>

          <button id="signup" type="submit" name="signup">SignUp</button>
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
             rows += "<td><input type='text' name='Course[]' Required></td>";
             rows += "<td><input type='text' name='Institute[]' Required></td>";
             rows += "<td><input type='text' name='YearOfPassing[]' Required></td>";
             rows += "<td><input type='text' name='Percentage[]' Required></td>";
             rows += "<td><input style='background-color: solid black;' id='Decrement' type='button' value='(-)'' name='Decrement' ></td>";
             rows += "</tr>";

              $('#UserDetails').append(rows);
          });


         /*$(document).on('click','#Decrement',function()
          {
              $(this).parents('tr').remove();
          });


         $('#signup').click(function()
          {
            var FormData = $('#MyForm').serialize();
            //console.log(FormData);

            $.ajax({
                type: 'post',
                url: '<?php //echo base_url()?>RegisterForm/InsertDetails',
                data: FormData,
                dataType: 'json',
                cache: false,
                success: function ($data) 
                {
                  //alert($data.Msg);
                  $('#MyForm')[0].reset();
                  //$('#r0').remove();
                  window.location = "<?php //echo base_url();?>RegisterForm/index";
                }
            });
          });
*/
      });
      
    </script>
  </body>
</html> 
