<?php
	session_start();
	ini_set('upload_max_filesize', '2000M');
				$conn = new mysqli("localhost", "root", "", "licitix");
				
				
					$image = addslashes($_FILES['image']['tmp_name']);
					$image = file_get_contents($image);
					$image = base64_encode($image);	

				
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


					$query = "insert into items (item_id, title,description, keywords, short_description, picture,
	                                              seller_id,  category, auction_start_date, auction_end_date,price)
										values(-1, '$title','$description', '$keywords','$short_description', '$image',
										       $user_id,'$category', '$startdate', 
											    '$enddate','$price')";

					$result = $conn->query($query);	
?>