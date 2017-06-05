<?php

	$conn = new mysqli("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q", "sql11178361");

	$contact_id=$_GET['contact_id'];
	
	$sql = "delete from contact where contact_id = $contact_id";

	echo $sql;

	$result = $conn->query($sql);

	include 'crud.php';