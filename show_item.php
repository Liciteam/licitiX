<?php

	if (session_id() == '' || !isset($_SESSION)) session_start(); 

	$conn = new mysqli("localhost", "root","", "licitix");
	$item_id = $_GET['item_id'];

	$result = $conn->query("SELECT * FROM items where item_id = '$item_id'");

	$row = $result->fetch_array(MYSQLI_NUM);


	$title = $row[1];
	$description = $row[2];
	$keywords = $row[3];
	$short_description = $row[4];
	$picture = $row[5];
	$seller_id = $row[6];
	$subcategory = $row[7];
	$start_date = $row[8];
	$end_date = $row[9];
	$price = $row[10];

	$result = $conn->query("SELECT name, adress FROM users where user_id = '$seller_id'");
	$row = $result->fetch_array(MYSQLI_NUM);
	$name = $row[0];
	$adress = $row[1];
	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		$result = $conn->query("SELECT user_id FROM users where email = '$email'");
		$row = $result->fetch_array(MYSQLI_NUM);
		$_SESSION['user_id']=$row[0];
	}
	$row = $result->fetch_array(MYSQLI_NUM);

	echo "<div class='blended_grid'>
		<div class='pageHeader'>
		<p>";
	printf ("%s", $title);
	echo "</p></div>
        <div class='pageDescription'>
        <p>";
    printf ("%s", $short_description);
    echo "</p>
        </div>
		<div class='pageLeftMenu'>
			<img src='";
	printf ("%s", $picture);
	echo "''>
		</div>
		<div class='pageContent'>
			<p><span>Owner:</span> ";
	printf ("%s", $name);
	echo "</p>
            <p><span>Start time:</span>";
    printf ("%s", $start_date);
    echo "</p>
			<p><span>Time left:</span>";
	printf ("%s", $end_date);
	echo "</p>
			<p><span>Current bid:</span>";
	printf ("%s", $price);
	echo "</p>";
	if(isset($_SESSION['email'])){
			echo "<form action='bid.php?item_id=";
	printf ("%s", $item_id);
	echo "' method='POST'>
			<input type='text' name='bani' id='ipt' placeholder='Place bid'>
			<button type='submit'>Submit</button>
			</form>";
	}
			echo "<p><span>Item location:<span>";
	printf ("%s", $adress);		
	echo "</p>
		</div>
        <div class='pageDescription2'>
        <p>";
    printf ("%s", $description);	
    echo "</p>
        </div>
	</div>";    






