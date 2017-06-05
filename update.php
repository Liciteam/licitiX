<?php
	$conn = new mysqli("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q", "sql11178361");

	$user_id = $_POST['user_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$adress = $_POST['adress'];

	$sql = "update users set name = '$name', email = '$email', password = '$password', adress = '$adress' where user_id = $user_id";

	$result = $conn->query($sql);

	echo $sql;

	include 'crud.php';