<?php
	$conn = new mysqli("localhost", "root","", "licitix");

	$item_id=$_GET['item_id'];
	
	$sql = "delete from items where item_id = $item_id";

	echo $sql;

	$result = $conn->query($sql);

	include 'crud.php';