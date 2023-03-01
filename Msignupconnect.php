<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$number = $_POST['number'];
	$password = $_POST['password'];
	$Confirm_password = $_POST['Confirm_password'];

	$s="select * from manufacture where number='$number'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		header('location:Msignuperror.php');
	}
	else if($password != $Confirm_password)
	{
		header('location:Msignuperror1.php');
	}
	else
	{
		$stmt =("insert into manufacture(number,password,Confirm_password)
		values('$number','$password','$Confirm_password')");
		mysqli_query($conn,$stmt);
		header('location:Msignupsuccessfully.php');
	}
?>
