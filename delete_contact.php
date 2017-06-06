<?php

	$conn = new mysqli("localhost", "root","", "licitix");

	$contact_id=$_GET['contact_id'];
	
	$sql = "delete from contact where contact_id = $contact_id";

	echo $sql;

	$result = $conn->query($sql);

	include 'crud.php';