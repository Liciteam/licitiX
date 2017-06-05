<?php
	session_start();
	ini_set('upload_max_filesize', '2000M');
		$conn = mysql_connect("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q" ) OR DIE('Unable to connect, fuck my life! ');
		mysql_select_db("sql11178361", $conn);

		if (!$conn) {
	    	die('Eșec la conectare: ' . mysql_error());
		}
		else
		{
			//echo "<script type='text/javascript'>alert('Connection gud!')</script>";
				
				
					//if(empty($_POST['title']))
						//echo "<script type='text/javascript'>alert('Please complete the title field.')</script>";

					$name = $_POST['name'];
					$email = $_POST['email'];
					$password = $_POST['psw'];
					$adress = $_POST['address'];

					$password=md5($password);
					$semail = $_SESSION['email'];
				
					$result = mysql_query("UPDATE sql11178361.users SET name = '$name', email ='$email',password= '$password', adress = '$adress' where email = '$semail'",$conn);
				
					//echo "$title <br> <br>";
					//echo "$category <br> <br>";
					//echo "$description <br> <br>";
					//echo "$short_description <br> <br>";
					//echo "$price <br> <br>";
					//echo "$startdate <br> <br>";
					//echo "$enddate <br> <br>";
					//echo "$keywords <br> <br>";
					//echo "$email <br> <br>";
					//echo "$user_id <br> <br>";
					echo "<script type='text/javascript'>alert('Your profile information were updated')</script>";
					include'home.html';

		}
?>