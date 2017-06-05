<?php
	session_start();

	$conn = mysql_connect("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q" ) OR DIE('Unable to connect, fuck my life! ');
	mysql_select_db("sql11178361", $conn);

	if (!$conn) {
    die('Eșec la conectare: ' . mysql_error());
	}
	else
	{
		echo "<script type='text/javascript'>alert('Connection gud!')</script>";
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$adress = $_POST['adress'];

	//$password = md5($password);
	$sql = "INSERT INTO sql11178361.users(name, email, password, adress) VALUES ('$name', '$email', '$password', '$adress')";
	

	// $conn->query($sql);
	$res = mysql_query($sql,$conn);
	include 'index.php';