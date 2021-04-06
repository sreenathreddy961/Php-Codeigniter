<?php
$select_query = mysqli_query($conn,"SELECT * FROM reg_details");
	$numberofrows = mysqli_num_rows($select_query);
	if ($numberofrows > 0) 
	{
		echo "<center><table>
				<tr>
					<th>S.No</th>
					<th>FirstName</th>
					<th>LastName</th>
					<th>DOB</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Address</th>
					<th>Education</th>
					<th>KeySkills</th>
					<th>Gender</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>";
				$i=1;
  		while($numberofrows > 0) 
  		{
  			$result = mysqli_fetch_assoc($select_query);
    		echo "<tr>
    				<td>".$i."</td>
    				<td>". $result["Fname"]. "</td>
    				<td>" . $result["Lname"]. "</td>
    				<td> " . $result["DOB"]. "</td>
    				<td> " . $result["Mobile"]. "</td>
    				<td> ". $result["Email"]."</td>
    				<td>".$result["Address"]."</td>
    				<td>". $result["Education"]."</td>
    				<td> ".$result["KeySkills"]."</td>
    				<td>".$result["Gender"]."</td>";
    			?>
    				<td class='btn'><a onClick=" return confirm('Please confirm deletion');" href='delete.php?EmployeUId=<?=$result["EmployeUId"];?>' name='delete'>Delete</a></td>
    				<td class='btn'><a href='./update.php?EmployeUId=<?=$result["EmployeUId"];?>' name='edit' value=''>Edit</a></td>
    			<?php
    		$numberofrows--;
    		$i++;
  		}
  		echo "</table></center>";
	}
	else 
	{
  		echo "No Data Found";
	}
	
	?>