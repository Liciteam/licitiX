<?php
	
	$conn = new mysqli("localhost", "root","", "licitix");

	$first_name = $_GET['firstname'];
	$last_name = $_GET['lastname'];
	$country = $_GET['country'];
	$email = $_GET['email'];
	$subject = $_GET['message'];

	$sql = "insert into contact (first_name, last_name, country, email, subject) values ('$first_name', '$last_name', '$country', '$email', '$subject')";

	echo $sql;

	$result = $conn->query($sql);

	header("Location: index.php");
