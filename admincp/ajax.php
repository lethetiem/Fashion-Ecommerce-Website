<?php
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$db = mysqli_connect("localhost", "root", "", "sale_online");
$result = mysqli_query($db, "select * from tbl_loginadmin where username = '$username' and password = '$password' ") or die("Failed to query database " .mysqli_error($mysqli));
$row = mysqli_fetch_array($result);

	if(mysqli_num_rows($result)==1){
		echo "Login success!!! Welcome ".$row['username'];
	}
	else{
		echo "Failed to login";
	}

?>