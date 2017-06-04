<?php
	session_start();
	ini_set('upload_max_filesize', '2000M');
	if(isset($_SESSION['email'])){
		//echo "sun is up";
		//if(isset($_POST['sumit']) )
		if($_SERVER["REQUEST_METHOD"] == "POST")
			//echo"blabla";
				
				$conn = new mysqli("localhost", "root", "", "licitix");
				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				} 
				else
				{
				//if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
				if(isset($_FILES['image']))
				{
					echo "<script type='text/javascript'>alert('Please select an image.')</script>";
				}
				else
				{
					
					// if(isset($_FILES['image'])){
    				//echo $_FILES['image']['tmp_name'];
    				//echo '<br>';
					// }
					// else
					// {
					// 	echo "caprita";
					// }
					$image = addslashes($_FILES['image']['tmp_name']);
					$image = file_get_contents($image);
					$image = base64_encode($image);	

				
					$title = $_POST['title'];
					$category = $_POST['Category'];
					$description = $_POST['message'];
					$quantity = $_POST['quantity'];
					$price = $_POST['price'];
					$available_until = $_POST['bday'];
					$shipping = $_POST['Country'];
					$shipping_fee = $_POST['price1'];

					echo  $title; 
					echo '<br>';
					echo  $category; 
					echo '<br>';
					echo  $description;
					echo '<br>'; 
					echo  $quantity; 
					echo '<br>';
					echo  $price;
					echo '<br>';
					echo  $available_until; 
					echo '<br>';
					echo  $shipping; 
					echo '<br>';
					echo  $shipping_fee;
					echo '<br>';

					$query = "insert into items ( image,title, category, description, 
	                                              quantity,  price, available_until,
	                                              shipping,shipping_fee)
										values('$image','$title', '$category','$description',
										       $quantity,$price,'$available_until', '$shipping', 
											    $shipping_fee)";


					$result = $conn->query($query);	
					// else
					// {
					// 	echo "plm";
					// }
				}
			}
	}
?>