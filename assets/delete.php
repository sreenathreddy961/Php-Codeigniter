<?php
$conn = new mysqli("localhost","root","","sreenath");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["EmployeUId"];
$sql = "DELETE FROM reg_details WHERE EmployeUId=".$id;
$sql1 = "DELETE FROM educationdetails WHERE EmployeUId=".$id;
if ($conn->query($sql) && $conn->query($sql1)) 
{
  mysqli_close($conn);
  header("location:db.php");
  exit;
} 
else 
{
  echo "Error deleting record: " . $conn->error;
}
?>