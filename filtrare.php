<?php
	$conn = new mysqli("localhost", "root", "", "licitix");

	$result = $conn->query("SELECT DISTINCT subcategory FROM items");

	if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

	echo "<form action = 'schimba.php' method = 'post' width = '200px'>
                    Please select a subcategory: 
                    <select name = 'subcategory' >
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



