<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '','iwt');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$empID = $_POST['empID'];
$name_on_card = $_POST['name_on_card'];
$card_num = $_POST['card_num'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$cvv = $_POST['cvv'];

// database insert SQL code
$sql = "INSERT INTO `payment` ('name', 'email', 'empID', 'name_on_card', 'card_num', 'exp_month', 'exp_year', 'cvv') VALUES ('$name', '$email', '$empID', '$name_on_card', '$card_num', '$exp_month', '$exp_year', '$cvv' )";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Records Inserted";
}
?>