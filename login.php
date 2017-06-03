<?php


	session_start();

	$conn = new mysqli("localhost", "root", "", "licitix");



	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password);
	$sql = "SELECT * FROM USERS WHERE EMAIl = '$email' AND PASSWORD = '$password'";

	$res = $conn->query($sql);
	if($res->num_rows == 1){
		$_SESSION['email'] = $email;
		header("Location: home.html");
	}
	else
	{
		header("Location: index.php");
	}
