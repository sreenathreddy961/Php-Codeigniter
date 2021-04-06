<html>
	<head>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">		
		<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css"> -->
		<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css"> -->
		<style type="text/css">
			#edit
			{
				text-decoration: none;
				color: black;
			}
			#add
			{
				float: right;
				font-size: 15px;
				padding: 1% 2%;
				margin-right: 70px;
				background-color: #efe6e3;
			}
			/*.btn
			{
				background-color: lightgreen;
			}*/
			.delete
			{
				background-color: #FF0000;
				color: white;
			}
			#edit1
			{
				background-color: #556B2F;
				
			}
			#edit
			{
				color: white;
			}
			.userinfo
			{
				background-color: 008080;
				color: white;
			}
		</style>
	</head>
	 
	<body>
		<!-- <div class="split right" id="right" name="right"> -->
			<!-- <form action="<?php //echo base_url(); ?>RegisterForm/retrieve">
				<button id="add" type="submit">Add</button>
			</form> -->
		<div>
			<center>
				<table border="1" id="DetailsTable" >
					<thead>
						<tr>
							<th>Id</th>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Email</th>
							<th>Address</th>
							<th>Education</th>
							<th>KeySkills</th>
							<th>Gender</th>
							<th >Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($Data as $row)
							{
								echo "<tr>
										<td>".$row->EmployeUId."</td>
										<td>".$row->Fname."</td>
										<td>".$row->Lname."</td>
										<td>".$row->Email."</td>
										<td>".$row->Address."</td>
										<td>".$row->Education."</td>
										<td>".$row->KeySkills."</td>
										<td>".$row->Gender."</td>";
										?>
											<td class='btn'>
												<button class="delete"  data-id='<?= $row->EmployeUId;?>' name='delete'>Delete |</button>
												<!-- <i style="size: 10x;"class="fas fa-trash"></i><button class="edit"  data-id='<?= $row->EmployeUId;?>' name='edit'>Edit |</button> -->
								    			<button id="edit1"><a id="edit" href='<?php echo base_url("RegisterForm/DisplayDetails/".$row->EmployeUId);?>' name='edit' >Edit |</a></button>
								    			
								    			<button type="button" data-id='<?=$row->EmployeUId;?>' class="userinfo" data-toggle="modal" data-target="#myModal">View |</button>
								    			<!-- <button type="button"  class="userinfo" data-toggle="modal" data-target="#myModal"></button> -->
								    		</td>
							    		</tr>
									<?php
							}
						?>
					</tbody>
				</table>

				<table border="1" id="CourseDetails">
					<thead>
						<tr>
							<th>Id</th>
							<th>EmployeeUId</th>
							<th>Course</th>
							<th>Name Of Institute</th>
							<th>Year Of Passing</th>
							<th>Percentage</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($EduData as $row)
							{
								echo "<tr>
										<td>".$row->UId."</td>
										<td>".$row->EmployeUId."</td>
										<td>".$row->Course."</td>
										<td>".$row->InstituteName."</td>
										<td>".$row->YearOfPassing."</td>
										<td>".$row->Percentage."</td>
							    		</tr>";
							}
						?>
					</tbody>
				</table>
			</center>

			<div class="container">
				<!-- Modal -->
				<div class="modal " id="myModal" role="dialog">
				    <div class="modal-dialog">
				        <!-- Modal content-->
				        <div class="modal-content">
				        	<div class="modal-header">
				        		<h4 class="modal-title">Employee Course Details</h4>
				          		<button type="button" class="close" data-dismiss="modal">&times;</button>          		
				        	</div>
				        	<div class="modal-body">
				          		
				        	</div>
				        	<div class="modal-footer">
				          		<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				        	</div>
				      </div> 
				    </div>
				  </div>
			</div>
			
		</div>
		<!-- </div> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!-- <script type="text/javascript" src="<?php //echo base_url('assets/modalAjax.js'); ?>"></script> -->
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js">
		</script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
		<script type="text/javascript">
			

			$(document).ready(function()
			{
				

				$('.delete').click(function()
				{
					var deleted = $(this).closest("tr");

					if(confirm(" Please confirm deletion"))
					{
						var Id = $(this).attr('data-id');

						$.ajax
						({
							type : 'post',
							url : '<?php echo base_url("RegisterForm/DeleteDetails");?>',
							data : {Id:Id},
							// dataType : 'json',
							cache : false,
							success : function()
							{
								deleted.remove();
								window.location = "<?php echo base_url();?>RegisterForm/index";
								// alert('Successfully deleted');
							}
						});
					}
				});

				$('.userinfo').click(function()
				{
				   var userid = $(this).attr('data-id');

				   $.ajax
				   ({
					    url: '<?php echo base_url("RegisterForm/DisplayDetailsInModal");?>',
					    type: 'post',
					    data: {userid: userid},
					    success: function(response)
					    {
					      $('.modal-body').html(response);
					      
					    }
				  	});
				 });
				

				/*$('.edit').click(function()
				{
					//alert("hiii");
					var id = $(this).attr('data-id');
					$.ajax({
						type : 'post',
						url : '<?php //echo base_url("RegisterForm/UpdateDetails");?>',
						data : {id:id},
						dataType : 'json',
						success : function()
						{
							alert("successfully updated "+id);
						}
					});
				});*/
			});
			$(document).ready(function()
		    {
		        $('#DetailsTable').dataTable(
		        {
		        	scrollY:        "300px",
			        scrollX:        true,
			        scrollCollapse: true,
			        paging:         false,
			        fixedColumns:   {
			            leftColumns: 1,
			            rightColumns: 1
			        },
		            dom: 'Bfrtip',
		            buttons: [
		                'copy', 'csv', 'excel', 'pdf', 'print'
		            ]
		        });
		    });
		    $(document).ready(function()
	        {
	        	$('#CourseDetails').dataTable();
	        });
		</script>
	</body>
</html>
<!-- print_r(result());