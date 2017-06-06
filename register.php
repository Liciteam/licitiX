<?php
	session_start();

	$conn = mysql_connect("localhost", "root","" ) OR DIE('Unable to connect, fuck my life! ');
	mysql_select_db("licitix", $conn);

	if (!$conn) {
    die('Eșec la conectare: ' . mysql_error());
	}
	else
	{
		//echo "<script type='text/javascript'>alert('Connection gud!')</script>";
		$name = "";
		$email = "";
		$password = "";
		$adress = "";
		if (isset($_POST['email'])){
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			$adress = trim($_POST['adress']);
		} else {
			$email = trim($_POST['username']);
			$name = trim($_POST['firstname']) . " " . trim($_POST['lastname']);
			$password = trim($_POST['password']);
			$password2 = trim($_POST['password']);
			if ($password != $password2) {
				//Password was typed wrong
				header("Location: home.php");
			}
		}
		

		$password = md5($password);
		$sql = "INSERT INTO users(name, email, password, adress) VALUES ('$name', '$email', '$password', '$adress')";
		

		// $conn->query($sql);
		$res = mysql_query($sql,$conn);
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;

		//echo $res;
		header("Location: home.php");
		//include 'home.php';
	}

	