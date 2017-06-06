<?php
	$conn = new mysqli("localhost", "root","", "licitx");

	$user_id=$_GET['user_id'];
	
	$sql = "delete from users where user_id = $user_id";

	echo $sql;

	$result = $conn->query($sql);

	include 'crud.php';