<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$hash = password_hash($password, PASSWORD_DEFAULT);
	$type=$_POST['type'];
	
	$sql="INSERT INTO `register`(`name`, `email`, `password`, `type`) VALUES ('".$name."','".$email."','".$hash."','".$type."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['name'] = $name;
		header('Location: home.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>
