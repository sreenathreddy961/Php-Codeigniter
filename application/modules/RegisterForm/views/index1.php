<!DOCTYPE html>
<html>
  <head>
    <title>Signup form </title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/javaPic1.png'); ?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"> -->
    <script type="text/javascript" src="<?php echo base_url('assets/validat.js'); ?>"></script>
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
        right: 0px;
        margin-top:7%;
        position: absolute;
        width:100%;
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
        width: 100%;
        border: 1px solid white;
        border-collapse: collapse;
      }
      th
      {
        height: 5%;
        color: white;
        column-span: 1;
        background-color: black;
        border: 1px solid green;
      }
      td
      {
        text-align: left;
        color: black;
        border: 1px solid black;
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
      .input
      {
        width: 100%;
        background-color: lightblue !important;
      }
      .edu
      {
        width: 5%;
      }
      #select
      {
        width: 37%;
        background-color: lightblue;
      }
      #Increment
      {
        background-color: blue;
      }
      #Decrement
      {
        background-color: red;
        width: 100%;
        color: white;
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
        width: 22%;
        height: 1200px; 
        margin-top: 1px;
        margin-left: 15px;
        background-color: #efe6d3;
      }
      #DetailsView
      {
        margin-left:385px;
        margin-top:50px;
        width: 70%;
      }
      .error
      {
        color: red;
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

  <body >

    <div class="split right" id="right" name="right">
      <div id="FormView"><br>
        
        <form name="form1" id="MyForm">

         <h1>Bio Data</h1>
         <p id="star"><span class="star">*</span> Required Fields</p>

          <label for="fname">First Name<span class="star">*</span>  :</label><br><input type="text" class="input form-control" id="fname" name="fname"  placeholder="First Name">
          <div class ="msgBlock" id="alert1"></div>
          
          

          <label for="lname">Last Name<span class="star">*</span> :</label><br><input type="text" id="lname" class="input form-control" name="lname" placeholder="LastName">
          <div class ="msgBlock" id="alert2"><?php echo form_error('lname'); ?></div>
          

          <label for="dob">DOB<span class="star">*</span>   :</label><br><input type="date" class="input form-control" id="dob" name="dob" >
          <div class ="msgBlock" id="alert3"><?php echo form_error('dob'); ?></div>

          <label for="mobileNo">Mobile No.<span class="star">*</span> :</label><br><input type="mobileNo" class="input form-control" id="mobileNo" name="mobileNo" maxlength="10" placeholder="Contact No" onkeypress="return isNumber(event)" />
          <div class ="msgBlock" id="alert4"><?php echo form_error('mobileNo'); ?></div>
          

          <label for="email">Email<span class="star">*</span> :</label><br><input type="text"  class="input form-control" id="email" name="email" placeholder="Email">
          <div class ="msgBlock" id="alert5"><?php echo form_error('email'); ?></div>
          

          <label for="address">Address  :</label><br><textarea class="input form-control" id="address" name="address"  placeholder="Permanent Address"></textarea><div class ="msgBlock" id="alert9"></div><br>

          <span id="Edu">
            <label for="edu">Education<span class="star">*</span> :</label><input type="checkbox" class="edu" name="Edu[]" value="10th"><span>10th</span>  <input type="checkbox" class="edu" name="Edu[]"  value="12th"><span>12th</span>   <input type="checkbox" class="edu" name="Edu[]" value="UG"><span>UG </span>
            <?php echo form_error('Edu[]'); ?><br><br>
          </span>
          <div class ="msgBlock" id="alert7" style="text-align: left;"></div>
             
          
          <label for="select" style="float: left;">Key Skills:</label>
            <select name="skils" class='form-control' id="select" >
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
            </select><div class ="msgBlock" id="alert10"></div><br>
            <span id="gender">
              <label for="gender">Gender<span class="star">*</span>     :</label>
              <input type="radio" id="male" class="gender" name="gender" value="M" ><span>M</span>
              <input type="radio" class="gender" id="female"value="FM" name="gender" ><span>FM</span>
              <input type="radio" class="gender" id="Others" value="gender" name="gender" ><span>Others</span><br><br>
              <div class ="msgBlock" id="alert6"><?php echo form_error('gender'); ?></div>
            </span>
      
          <table id="UserDetails" >
            <thead>
              <tr>
                <th>Course</th>
                <th>Institute Name</th>
                <th>Year of Passing</th>
                <th>CGPA/%</th>
                <th><button type="button" id="Increment" name="Increment">Add(+)</button></th>
              </tr>
            </thead>
            <tbody>
              <tr id="r0">
                <td><input type="text" class="input form-control" name="Course[]" required="required" /></td>
                <td><input type="text" class="input form-control" name="Institute[]" required="required"/></td>
                <td><input type="text" class="input form-control" name="YearOfPassing[]" required="required"/></td>
                <td><input type="text" class="input form-control" name="Percentage[]" required="required"/></td>
                <td><input  id="Decrement" type="button" class='form-control' value="(-)" name="Decrement" /></td>
              </tr>
            </tbody>
          </table><br>
          <div id="Course" ></div>
          <div id="Institute"></div>
          <div id="YearOfPassing" ></div>
          <div id="Percentage" ></div>

          <!-- <input type="checkbox" id="terms" style="width: 5%"><span>I accept </span><a href="" >Terms & Conditions</a>
          <div class ="msgBlock" id="alert8"></div> <br>-->

          <button id="signup" type="button" class='form-control' name="signup">Submit</button>
        </form>

      </div>
      
      <div id="DetailsView">
        <?php
          $this->load->view('db'); 
        ?>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker-standalone.css"> -->
    <!-- <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script> -->
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script> -->
    <script type="text/javascript">
      

    	$(document).ready(function() 
    	{
          $("#Increment").click(function()
          {
             var rows = "<tr>";
             rows += "<td><input type='text' class='input form-control' name='Course[]' Required></td>";
             rows += "<td><input type='text' class='input form-control' name='Institute[]' Required></td>";
             rows += "<td><input type='text' class='input form-control' name='YearOfPassing[]' Required></td>";
             rows += "<td><input type='text' class='input form-control' name='Percentage[]' Required></td>";
             rows += "<td><button id='Decrement' type='button' class='form-control' name='Decrement' >(-)</button></td>";
             rows += "</tr>";

              $('#UserDetails').append(rows);
          });


          $(document).on('click','#Decrement',function()
          {
              $(this).parents('tr').remove();
          });


          $('#signup').click(function()
          {
            var FormData = $('#MyForm').serialize();
            $.ajax({
                type: 'post',
                url: '<?php echo base_url()?>RegisterForm/InsertDetails',
                data: FormData,
                dataType: 'json',
                cache: false,
                beforeSend: function()
                {
                  $('.error').remove();
                },

                success: function (data) 
                { 
                  if(data.status == 'failed')
                  {
                    Object.keys(data).forEach(function(value)
                    {
                      
                      //alert(value);
                      if (data[value] != "")
                      {
                        $('#' + value).after(data[value]);
                        $('#' + value).css('border-color','red');

                      }
                      else
                      {
                        $('#' + value).after('');
                        $('#' + value).css('border-color','green');
                      }
                    });

                    
                  }
                  else
                  {
                    $('#MyForm')[0].reset();
                    //$('#DetailsTable').load('index.php');
                    //$("#DetailsTable").load();
                    /*var body = "<tr>";
                    $.each(data, function(i, data) {
                    body    += "<td>" + data + "</td>";
                    });
                    body    += "</tr>";
                    $('#DetailsTable').append(body);*/
                    //$('#r0').remove();
                    window.location = "<?php //echo base_url();?>RegisterForm/index";
                  }
                    /*$.each(data, function(key, value) 
                    {
                      //alert(data.fname);
                      $('#' + key).parents('#MyForm').find('.error').html(value);
                    }); */
                    //alert(data.Edu_error);
                    /*if (data.fname_error === '') 
                    {
                      $('#fname').css('border-color','green');
                      $("#alert1").html('');
                    }
                    else 
                    {
                      $('#fname').css('border-color','red');
                      $("#alert1").html(data.fname_error);
                    }
                    if (data.lname_error === '') 
                    {
                      $('#lname').css('border-color','green');
                      $("#alert2").html('');
                    }
                    else 
                    {
                      $('#lname').css('border-color','red');
                      $("#alert2").html(data.lname_error);
                    }
                    if (data.dob_error === '') 
                    {
                      $('#dob').css('border-color','green');
                      $("#alert3").html('');
                    }
                    else 
                    {
                     $('#dob').css('border-color','red');
                     $("#alert3").html(data.dob_error);
                    }
                    if (data.mobileNo_error === '') 
                    {
                      $('#mobileNo').css('border-color','green');
                      $("#alert4").html('');
                    }
                    else 
                    {
                      $('#mobileNo').css('border-color','red');
                      $("#alert4").html(data.mobileNo_error);
                    }
                    if (data.email_error === '') 
                    {
                      $('#email').css('border-color','green');
                      $("#alert5").html('');
                    }
                    else 
                    {
                      $('#email').css('border-color','red');
                      $("#alert5").html(data.email_error);
                    }
                    if (data.address_error === '') 
                    {
                      $('#address').css('border-color','green');
                      $("#alert9").html('');
                    }
                    else 
                    {
                      $('#address').css('border-color','red');
                      $("#alert9").html(data.address_error);
                    }
                    if (data.Edu_error === '') 
                    {
                      $('#alert7').html('');
                    }
                    else 
                    {
                      $('#alert7').html(data.Edu_error);
                    }
                    if (data.skils_error === '') 
                    {
                      $('#select').css('border-color','green');
                      $("#alert10").html('');
                    }
                    else 
                    {
                      $('#select').css('border-color','red');
                      $("#alert10").html(data.skils_error);
                    }
                    if (data.gender_error === '') 
                    {
                      $('#male').css('border-color','green');
                      $('#female').css('border-color','green');
                      $('#Others').css('border-color','green');
                      $('#alert6').html(data.gender_error);
                    }
                    else 
                    {
                      $('#male').css('border-color','red');
                      $('#female').css('border-color','red');
                      $('#Others').css('border-color','red');
                      $('#alert6').html(data.gender_error);
                    }
                    for(var i=0; i<=$('[name="Course[]"]').length; i++)
                    {
                        if(data.Course_error=== '')
                        {
                          $('[name="Course[]"]:eq('+i+')').css('border-color','green');
                        }
                        else
                        {
                          if ($('[name="Course[]"]:eq('+i+')').val() === "")
                          {
                            $('[name="Course[]"]:eq('+i+')').css('border-color','red');
                          }
                          else
                          {
                            $('[name="Course[]"]:eq('+i+')').css('border-color','green');
                          }
                        }

                        if(data.Institute_error === '')
                        {
                          $('[name="Institute[]"]').css('border-color','green');
                        }
                        else
                        {
                          if ($('[name="Institute[]"]:eq('+i+')').val() === "")
                          {
                            $('[name="Institute[]"]:eq('+i+')').css('border-color','red');
                          }
                          else
                          {
                            $('[name="Institute[]"]:eq('+i+')').css('border-color','green');
                          }
                        }

                        if(data.YearOfPassing_error === '')
                        {
                          $('[name="YearOfPassing[]"]').css('border-color','green');
                        }
                        else
                        {
                          if ($('[name="YearOfPassing[]"]:eq('+i+')').val() === "")
                          {
                            $('[name="YearOfPassing[]"]:eq('+i+')').css('border-color','red');
                          }
                          else
                          {
                            $('[name="YearOfPassing[]"]:eq('+i+')').css('border-color','green');
                          }
                        }

                        if(data.Percentage_error === '')
                        {
                          $('[name="Percentage[]"]').css('border-color','green');
                        }
                        else
                        {
                          if ($('[name="Percentage[]"]:eq('+i+')').val() === "")
                          {
                            $('[name="Percentage[]"]:eq('+i+')').css('border-color','red');
                          }
                          else
                          {
                            $('[name="Percentage[]"]:eq('+i+')').css('border-color','green');
                          }
                        }
                  }*/
                }
            });
          });

    	});	
    </script>
  </body>
</html> 
