<?php
	session_start();

	$conn = new mysqli("localhost", "root", "", "licitix");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$adress = $_POST['adress'];

	$password = md5($password);
	$sql = "INSERT INTO users(name, email, password, adress) VALUES ('$name', '$email', '$password', '$adress')";
	

	$conn->query($sql);

	include 'index.php';