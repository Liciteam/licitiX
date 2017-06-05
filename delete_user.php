<?php
	$conn = new mysqli("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q", "sql11178361");

	$user_id=$_GET['user_id'];
	
	$sql = "delete from users where user_id = $user_id";

	echo $sql;

	$result = $conn->query($sql);

	include 'crud.php';