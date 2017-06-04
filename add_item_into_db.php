<?php
	session_start();
	ini_set('upload_max_filesize', '2000M');
				$conn = new mysqli("localhost", "root", "", "licitix");
				
				
					
					$title = $_POST['title'];
					$category = $_POST['Category'];
					$description = $_POST['description'];
					$short_description = $_POST['short_description'];
					$price = $_POST['price'];
					$startdate = $_POST['startdate'];
					$enddate = $_POST['enddate'];
					$keywords = $_POST['keywords'];
					$email = $_SESSION['email'];
					$result = $conn->query("SELECT user_id FROM users where email = '$email'");
					$row = $result->fetch_array(MYSQLI_NUM);
					$user_id=$row[0];
					
					$uploaddir = 'images/';
					$uploadfile = $uploaddir . basename($_FILES['image']['name']);

					$image =  $uploaddir . basename($_FILES['image']['name']);

					if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
					  echo "File is valid, and was successfully uploaded.\n";
					} else {
					   echo "Upload failed";
					}


					echo "$title <br> <br>";
					echo "$category <br> <br>";
					echo "$description <br> <br>";
					echo "$short_description <br> <br>";
					echo "$price <br> <br>";
					echo "$startdate <br> <br>";
					echo "$enddate <br> <br>";
					echo "$keywords <br> <br>";
					echo "$email <br> <br>";
					$result = $conn->query("SELECT user_id FROM users where email = '$email'");
					$row = $result->fetch_array(MYSQLI_NUM);
					$user_id=$row[0];
					echo "$user_id <br> <br>";


					$query = "insert into items ( title,description, keywords, short_description, picture,
	                                              seller_id,  category, auction_start_date, auction_end_date,price)
										values( '$title','$description', '$keywords','$short_description', '$image',
										       $user_id,'$category', '$startdate', 
											    '$enddate','$price')";

					$result = $conn->query($query);	
?>