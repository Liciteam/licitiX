<?php
	$conn = new mysqli("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q", "sql11178361");
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



