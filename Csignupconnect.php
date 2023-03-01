<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$email = $_POST['email'];
	$password = $_POST['password'];
	$Confirm_password = $_POST['Confirm_password'];

	$s="select * from customer where email='$email'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		header('location:Csignuperror.php');
	}
	else if($password != $Confirm_password)
	{
		header('location:Csignuperror1.php');
	}
	else
	{
		$stmt =("insert into customer(email,password,Confirm_password)
		values('$email','$password','$Confirm_password')");
		mysqli_query($conn,$stmt);
		header('location:Csignupsuccessfully.php');
	}
?>
