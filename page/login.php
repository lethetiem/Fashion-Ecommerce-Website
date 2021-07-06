
<?php
	session_start();
     
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$db = mysqli_connect("localhost", "root", "", "sale_online");
	
	$error=false;
	if(isset ($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){


	
	$result = mysqli_query($db, "select * from tbl_register where username = '$username' and password = '$password' ")or die("Failed to query database " .mysqli_error()); ;
	

	 if(!$result){
		$error=mysqli_error($db);

	  }
	else{
		$data = mysqli_fetch_assoc($result);
		$_SESSION['current_user']= $data;
		
	  }
	 mysqli_close($db);
	if($error !== false || $result->num_rows==0){ 
		echo json_encode(array(
			'status' => 0,
			'message'=>'Failed to login'

		));
		exit;
	 


	}

	else{
		$_SESSION['current_login']='1';
		
		echo json_encode(array(
			'status' => 1,
			'message'=>'Login success!!! Welcome.'

		));
		
		exit;
		
		
	}
}
else{
		echo json_encode(array(
			'status' => 0,
			'message'=>'Failed to login'

		));
		exit;
	}

	 
	
?>