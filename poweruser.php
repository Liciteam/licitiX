<?php

	session_start();
	if($_POST['username']=='lici' and $_POST['password']=='team'){
		$_SESSION['tata'] = 2;
		include 'crud.php';
	}
	