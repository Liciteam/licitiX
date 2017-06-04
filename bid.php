<?php

	session_start();



	$conn = new mysqli("localhost", "root", "", "licitix");

	$cash = $_POST['bani'];

	$item_id = $_GET['item_id'];

	$user_id = $_SESSION['user_id'];

	$today = date('y/d/m');

	$result = $conn->query("SELECT price FROM items where item_id = '$item_id'");
	$row = $result->fetch_array(MYSQLI_NUM);

	if($row[0]<$cash){

	$sql = "INSERT INTO bids(user_id, item_id, price, bid_date) VALUES ('$user_id', '$item_id', '$cash', '$today')";

	$conn->query($sql);

	$sql = "update items set price = $cash where item_id =  $item_id";

	$conn->query($sql);
}
	include 'paginare.php';
