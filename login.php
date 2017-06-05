<?php


	session_start();

	//$conn = new mysqli("localhost", "root", "", "licitix");
	// $conn = new mysqli("sql11.freemysqlhosting.net","sql11178361", "NIK1rC4p5q");
	$conn = mysql_connect("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q" ) OR DIE('Unable to connect, fuck my life! ');
	mysql_select_db("sql11178361", $conn);
	if (!$conn) {
    die('Eșec la conectare: ' . mysql_error());
	}
	else
	{
		echo "<script type='text/javascript'>alert('Connection gud!')</script>";
	}
	// if ($conn->connect_error) {
	// 	//echo "<script type='text/javascript'>alert('Connection failed!')</script>";
	// 	echo "1";
	// } 
	// else
	// {
	// 	// echo "<script type='text/javascript'>alert('Connection gud!')</script>";
	// 	echo "2";
	// }

	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password);
	
	$sql = "SELECT * FROM sql11178361.users WHERE EMAIl = '$email' AND PASSWORD = '$password'";

	echo $sql;
	echo '<br>';
	echo $password;
	//$password = md5($password);

	$res = mysql_query($sql,$conn);
	// if(!($res = mysql_query("SELECT COUNT(*) FROM sql11178361.users"))){
	// 	echo "<script type='text/javascript'>alert('Nerulat')</script>";
	// }
	// else
	// {
	// 	echo "<script type='text/javascript'>alert('Rulat')</script>";
	// }
	$num_rows = mysql_num_rows($res);
	echo $num_rows;
	if($num_rows > 0){
		$_SESSION['email'] = $email;
		header("Location: home.html");
	}
	else
	{
		header("Location: index.php");
	}
