<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Database connection

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);

	//connect to the server and select database
	$db = mysqli_connect("localhost", "root", "123456", "login");
	//mysqli_select_db("login");
	//Query the databse for user
	$result = mysqli_query($db, "select * from users where username = '$username' and password = '$password' ") or die("Failed to query database " .mysqli_error());
	$row = mysqli_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password){
		echo "Login success!!! Welcome ".$row['username'];
	}else{
		echo "Failed to login";
	}


?>