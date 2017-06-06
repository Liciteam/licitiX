<?php
	session_start();
	ini_set('upload_max_filesize', '2000M');
		$conn = mysql_connect("localhost", "root","" ) OR DIE('Unable to connect, fuck my life! ');
		mysql_select_db("licitix", $conn);

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
					$old_password = $_POST['psw_old'];
					$adress = $_POST['address'];

					$password=md5($password);
					$old_password=md5($old_password);
					$semail = $_SESSION['email'];
				
				$result = mysql_query("UPDATE users SET name = '$name', email ='$email',password= '$password', adress = '$adress' where email = '$semail' and password= '$old_password'",$conn);
				
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
					//echo "<script type='text/javascript'>alert('Your profile information were updated')</script>";
					include'home.html';

		}
?>