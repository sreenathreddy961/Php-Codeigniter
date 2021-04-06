<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<form method="post" action="db.php">
	<table id="UserDetails">
		<tr>
			<!-- <th>S.No</th> -->
			<th>Course</th>
			<th>Name of the Institute</th>
			<th>Year of Passing</th>
			<th>Percentage Gained</th>
			<th><input type="button" id="Increment" value="Action (+)" name="Increment"/></th>
		</tr>
	</table>
		<button id="signup" name="signup" type="submit" >SignUp</button>

</form>
<script>
	$(document).ready(function()
	{
      // var i=2;
     $("#Increment").click(function()
     {
       var rows = "<tr>";
       // rows += "<td>"+ i +"</td>";
       rows += "<td><input type='text' name='Course[]' Required></td>";
       rows += "<td><input type='text' name='Institute[]' Required></td>";
       rows += "<td><input type='text' name='YearOfPassing[]' Required></td>";
       rows += "<td><input type='text' name='Percentage[]' Required></td>";
       rows += "<td><input style='background-color: solid black;' id='Decrement' type='button' value='(-)'' name='Decrement' ></td>";
       rows += "</tr>";

      $('#UserDetails').append(rows);
      // i++; 
  	});
	});
	$(document).on('click','#Decrement',function()
	{
		$(this).parents('tr').remove();
	});
</script>
</body>
</html>