<?php
	$conn = new mysqli("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q", "sql11178361");

	$item_id=$_GET['item_id'];
	
	$sql = "delete from items where item_id = $item_id";

	echo $sql;

	$result = $conn->query($sql);

	include 'crud.php';