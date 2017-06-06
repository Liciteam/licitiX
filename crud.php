<?php
	$conn = new mysqli("localhost", "root","", "licitix");
	//echo $_SESSION['tata'];

	$sql = "SELECT user_id, name, email, password, adress FROM users";
	$result = $conn->query($sql);

	echo "<h1>USERS</h1>";

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<br> id: ". $row["user_id"];
	        echo "<br> name: ". $row["name"];
	        echo "<br> email: ". $row["email"];
	        echo "<br> password: ". $row["password"];
	        echo "<br> adress: ". $row["adress"];
	        echo "<br><a href='delete_user.php?user_id=". $row["user_id"] . "'>Delete</a>";
	        echo "<br><a href='modify_user.php?user_id=". $row["user_id"] . "'>Modify</a>";


	        echo "<br><br>";
	    }
	} else {
    echo "0 results";
}

	echo "<br><br><h1>ITEMS</h1>";

	$sql = "SELECT item_id FROM items";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<br> id: ". $row["item_id"];
	        echo "<br><a href='item.php?item_id=". $row["item_id"] . "'>View item</a>";
	        echo "<br><a href='delete_item.php?item_id=". $row["item_id"] . "'>delete</a>";


	        echo "<br><br>";
	    }
	} else {
    echo "0 results";
}
	echo "<br><br><h1>CONTACT</h1>";

	$sql = "SELECT contact_id, first_name, last_name, country, email, subject FROM contact";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	         echo "<br> id: ". $row["contact_id"];
	        echo "<br> first_name: ". $row["first_name"];
	        echo "<br> last_name: ". $row["last_name"];
	        echo "<br> country: ". $row["country"];
	        echo "<br> email: ". $row["email"];
	        echo "<br> subject: ". $row["subject"];
	        echo "<br><a href='delete_contact.php?contact_id=". $row["contact_id"] . "'>Delete</a>";


	        echo "<br><br>";
	    }
	} else {
    echo "0 results";
}
?>