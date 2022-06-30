<?php

	ob_start();
	session_start();
	include('database.php');

	$username = mysqli_real_escape_string($mysqli,$_POST['username']);
	$password = mysqli_real_escape_string($mysqli,$_POST['password']);

	$sql      = "SELECT * FROM user_account WHERE username='$username' AND BINARY password='$password'";
	$result   = mysqli_query($mysqli, $sql);

	$row      = mysqli_fetch_assoc($result);
	$rows	  = mysqli_num_rows($result);
	
	if($rows==1){
		$_SESSION['name']  = $row['fname'] .' '. $row['mname'] .' '. $row['lname'];
		$_SESSION['type']  = $row['position'];
		$_SESSION['id']    = $row['u_id'];
		$_SESSION['position']    = $row['position'];
		$_SESSION['role']  = 1;
		header("location:../accounts/advocacy.php");
	}
	else {
		$sql      = "SELECT * FROM users WHERE email='$username' AND BINARY password='$password'";
		$result   = mysqli_query($mysqli, $sql);

		$row      = mysqli_fetch_assoc($result);
		$rows	  = mysqli_num_rows($result);
		if($rows==1){
			$_SESSION['name']  = $row['fname'] .' '. $row['lname'];
			$_SESSION['role']  = 2;
			$_SESSION['id']    = $row['user_id'];
			$_SESSION['chapter']    = $row['chapter'];
			$_SESSION['program_committee']    = $row['program_committee'];
			$_SESSION['memberrole']    = $row['role'];
			header("location:../accounts/advocacy.php");
		} else {
			header("location:../login.php?error");
		}
	}
