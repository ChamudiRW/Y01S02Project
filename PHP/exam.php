<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '','iwt');

// get the post records
$EmpID = $_POST['ID'];
$Marks = $_POST['RESULT'];

// database insert SQL code
$sql = "INSERT INTO `result` (`EmpID`, `Marks`) VALUES ('$EmpID', '$Marks')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>