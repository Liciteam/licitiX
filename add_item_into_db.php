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

					$title = $_POST['title'];
					$category = $_POST['Category'];
					$description = $_POST['description'];
					$short_description = $_POST['short_description'];
					$price = $_POST['price'];
					$startdate = $_POST['startdate'];
					$enddate = $_POST['enddate'];
					$keywords = $_POST['keywords'];
					$email = $_SESSION['email'];
					$result = mysql_query("SELECT user_id FROM sql11178361.users where email = '$email'",$conn);
					$row = mysql_fetch_array($result);
					$user_id=$row[0];
				

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

					if(1)
					{
						if( isset($_FILES['image']) )
						echo "<script type='text/javascript'>alert('Please select a photo !')</script>";

						if( empty($_POST['title']) )
							echo "<script type='text/javascript'>alert('Please complete the title field !')</script>";

						if( empty($_POST['Category']))
							echo "<script type='text/javascript'>alert('Please complete the category field !')</script>";

						if( empty($_POST['description']) )
							echo "<script type='text/javascript'>alert('Please complete the description field !')</script>";

						if( empty($_POST['short_description']) )
							echo "<script type='text/javascript'>alert('Please complete the short description field !')</script>";

						if(empty($_POST['price']))
							echo "<script type='text/javascript'>alert('Please complete the price field !')</script>";

						if( empty($_POST['startdate']) )
							echo "<script type='text/javascript'>alert('Please complete the start date field !')</script>";

						if( empty($_POST['enddate']) )
							echo "<script type='text/javascript'>alert('Please complete the end date field !')</script>";

						if( empty($_POST['keywords'])  )
							echo "<script type='text/javascript'>alert('Please complete the keywords field !')</script>";
						include'add_item.html';
					}
					else{

							$uploaddir = 'images/';
							$uploadfile = $uploaddir . basename($_FILES['image']['name']);

							$image =  $uploaddir . basename($_FILES['image']['name']);

							if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
							  	echo "File is valid, and was successfully uploaded.\n";
							} 

							$query = "insert into sql11178361.items ( title,description, keywords, short_description, picture,
		                                              seller_id,  category, auction_start_date, auction_end_date,price)
											values( '$title','$description', '$keywords','$short_description', '$image',
											       $user_id,'$category', '$startdate', 
											
												    '$enddate','$price')";

							$res = mysql_query($query,$conn);

							echo "<script type='text/javascript'>alert('Your item was successfully added.')</script>";
							include'paginare.html';
						}	
		}
?>