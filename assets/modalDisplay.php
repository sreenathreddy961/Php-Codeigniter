<?php
include "Connection.php";

$userid = $_POST['userid'];
 // print_r($userid);exit;
/*if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($con,$_POST['userid']);
}*/
$sql = "select * from reg_details where EmployeUId=".$userid;
$result = mysqli_query($con,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['EmployeUId'];
 $Fname = $row['Fname'];
 $Lname = $row['Lname'];
 $Dob = $row['DOB'];
 $mobile = $row['Mobile'];
 $email = $row['Email'];
 $Address =$row['Address'];
 $Edu = $row['Education'];
 $skills = $row['KeySkills'];
 $gender =$row['Gender'];

 /*$sql1 = "select "*/

 
 $response .= "<tr><td><pre>First Name    :</pre></td><td>".$Fname."</td>";
 

 $response .= "<tr><td><pre>Last name     :</pre></td><td>".$Lname."</td>";
 
 $response .= "<tr><td><pre>DOB           :</pre></td><td>".$Dob."</td>";
 
 $response .= "<tr><td><pre>Mobile No.    :</pre></td><td>".$mobile."</td>";

 $response .= "<tr><td><pre>Email         :</pre></td><td>".$email."</td>"; 

 $response .= "<tr><td><pre>Address       :</pre></td><td>".$Address."</td></tr>";

 $response .= "<tr><td><pre>Education     :</pre></td><td>".$Edu."</td></tr>";

 $response .= "<tr><td><pre>KeySkills     :</pre></td><td>".$skills."</td></tr>";

 $response .= "<tr><td><pre>Gender        :</pre></td><td>".$gender."</td></tr>";
}
$response .= "</table>";

$response .= '<table id="user">
                <tr>
                    <th>Course</th>
                    <th>Instiute</th>
                    <th>YearOfPassing</th>
                    <th>Percentage</th>
                </tr>';
        $ResultSelect =mysqli_query($con,"SELECT * FROM educationdetails WHERE EmployeUid='$userid'");
        $r=array();
        while ($res=mysqli_fetch_assoc($ResultSelect))
        {
            $r[]=$res;
        }
        foreach ($r as $res)
        {

        $response .= "<tr><td>".$res['Course']."</td><td>".$res['InstituteName']."</td><td>".$res['YearOfPassing']."</td><td>".$res['Percentage']."</td></tr>";
        
        }
        $response .= '</table>';

echo $response;
?>
<style type="text/css">
    td
    {
        text-align: left;
    }
    table
    {
        background-color: skyblue;
    }
    #user
    {
        width: 100%;
    }
</style>