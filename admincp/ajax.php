<?php
//include 'login.php';
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$db = mysqli_connect("localhost", "root", "", "sale_online");
$result = mysqli_query($db, "select * from tbl_loginadmin where username = '$username' and password = '$password' ") or die("Failed to query database " .mysqli_error($mysqli));
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)==1){
	echo json_encode(array(
		'status' => 1,
		'message' => 'Login successful!'
	));
	exit;
}else{
	echo json_encode(array(
		'status' => 0,
		'message' => 'Failed to login'
	));
	exit;
}

	
?>