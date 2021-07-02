
<?php

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//Database connection

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);

	//connect to the server and select database
	// $db = mysqli_connect("localhost", "root", "", "Sale_online");
	$db = mysqli_connect("localhost", "root", "", "sale_online");
	//mysqli_select_db("login");
	//Query the databse for user
	$result = mysqli_query($db, "select * from tbl_register where username = '$username' and password = '$password' ") or die("Failed to query database " .mysqli_error());
	$row = mysqli_fetch_array($result);
	//if($result){

		//$data =mysqli_fetch_assoc($result);
		//$_SESSION['customer']= $data;
  
	  //}
	
	if(mysqli_num_rows($result)==1){
		echo json_encode(array(
			'status' => 1,
			'message'=>'Login success!!! Welcome.'

		));
		exit;
		
		

	}
	else{
		
		echo json_encode(array(
			'status' => 0,
			'message'=>'Failed to login'

		));
		exit;
	}
	


?>