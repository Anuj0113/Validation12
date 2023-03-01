<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$number = $_POST['number'];
	$password = $_POST['password'];

	$s="select * from manufacture where number='$number' && password='$password'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$_SESSION['number']=$number;
 		header('location:Dashboard.php');
	}
	else
	{
		header('location:Mloginerror.php');
	}
?>
