<?php
	$conn = new mysqli("localhost", "root","", "licitix");
	$result = $conn->query("SELECT DISTINCT category FROM items");

	if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

	echo "<form action = 'schimba.php' method = 'post' width = '200px'>
                    Please select a category: 
                    <select name = 'category' >
                        <option value = '%' >All</option>
                        ";

	while ($row = $result->fetch_array(MYSQLI_NUM)) {
		echo "<option value = '";
		printf ("%s", $row[0]);
		echo "' >" ;
		printf ("%s", $row[0]);
		echo "</option>";
		
	}

	echo "<input type = 'submit' value = 'Search' />
                    </form>
                    ";



