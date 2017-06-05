<?php

$conn = new mysqli("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q", "sql11178361");

if(isset($_SESSION['filtru'])){
	$filtru = $_SESSION['filtru'];
}
else{
	$filtru = "%";
}


$result = $conn->query("SELECT item_id, picture, title, short_description, price, auction_start_date, auction_end_date FROM items where category like '%$filtru%'");

echo "<div class='container_item'>";

while ($row = $result->fetch_array(MYSQLI_NUM)) {
	echo "<div class='row'>
		    <a href = 'item.php?item_id=";
	printf ("%s", $row[0]);
	echo "'>";

	echo "<div id='image'>
		    	<img src='";
	printf ("%s", $row[1]);
	echo "' /></a>
		</div>
		    <div id='texts'> 
	<h1 id='titlu'>";
	printf ("%s", $row[2]);
	echo "</h1>
	<h2 id='descriere'>";
	printf ("%s", $row[3]);
	echo "</h2>
	<h3 id = 'pret'>";
	printf ("%s", $row[4]);
	echo "<h3>
	<h3 id = 'data'>";
	printf ("%s", $row[5]);
	echo "<h3>
	</div>
	</div>";	    	
	}
	echo "</div>";


