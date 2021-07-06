
<?php
	session_start();
     
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//Database connection

	//$username = stripcslashes($username);
	//$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);

	//connect to the server and select database
	// $db = mysqli_connect("localhost", "root", "", "Sale_online");
	$db = mysqli_connect("localhost", "root", "", "sale_online");
	//mysqli_select_db("login");
	//Query the databse for user
	$error=false;
	if(isset ($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){


	
	$result = mysqli_query($db, "select * from tbl_register where username = '$username' and password = '$password' ")or die("Failed to query database " .mysqli_error()); ;
	

	 if(!$result){
		$error=mysqli_error($db);

		// $_SESSION['Login'] = $username;
        // $_SESSION['id_register'] = $row_login['id_register'];

	// // 	//$data =mysqli_fetch_assoc($result);
	// // 	//$_SESSION['customer']= $data;

  
	  }
	else{
		$data = mysqli_fetch_assoc($result);
		$_SESSION['current_user']= $data;
		
		// $row_login = mysqli_fetch_array($result);
		// $_SESSION['Login'] = $username;
		//  $_SESSION['id_register'] = $row_login['id_register'];
		  

	  }
	 mysqli_close($db);
	if($error !== false || $result->num_rows==0){ 
		echo json_encode(array(
			'status' => 0,
			'message'=>'Failed to login'

		));
		exit;
	 


	}
	// $row_login = mysqli_fetch_array($sql_select_register);
	// $_SESSION['Login'] = $username;
    // $_SESSION['id_register'] = $row_login['id_register'];
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

	

	// if(isset($_POST['Login'])){
	// 	  $username = $_POST['username'];
	// 	  $password = md5($_POST['password']);
	// 	//   if($username == '' || $password == ''){
	// 	//     echo '<script>alert("Lam on khong de trong")</script>';
	// 	//   }else{
	// 	    $sql_select_register = mysqli_query($mysqli, "SELECT * FROM tbl_register WHERE username = '$username' AND password = '$password' LIMIT 1");
	// 	    $count = mysqli_num_rows($sql_select_register);
	// 	    $row_login = mysqli_fetch_array($sql_select_register);
	// 	    if($count > 0){
	// 	     // $_SESSION['Login'] = $username;
	// 	    //  $_SESSION['id_register'] = $row_login['id_register'];
	// 		  echo json_encode(array(
	// 					'status' => 1,
	// 					'message'=>'Login success!!! Welcome.'
			
	// 				));
					
	// 				exit;


	// 	    //       header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=AccountDashBoard');
	// 	    // echo'<script>window.location.href="/SaleOnlineWebDeveloper/page/index.php?manager=AccountDashBoard" </script>';
	// 	    }else{
	// 			echo json_encode(array(
	// 						'status' => 0,
	// 						'message'=>'Failed to login'
				
	// 					));
	// 					exit;
	// 	    }
		  
	// 	}
	

// if(isset($_POST['Login'])){
//   $username = $_POST['username'];
//   $password = md5($_POST['password']);
//   if($username == '' || $password == ''){
//     echo '<script>alert("Lam on khong de trong")</script>';
//   }else{
//     $sql_select_register = mysqli_query($mysqli, "SELECT * FROM tbl_register WHERE username = '$username' AND password = '$password' LIMIT 1");
//     $count = mysqli_num_rows($sql_select_register);
//     $row_login = mysqli_fetch_array($sql_select_register);
//     if($count > 0){
//       $_SESSION['Login'] = $username;
//       $_SESSION['id_register'] = $row_login['id_register'];
//           header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=AccountDashBoard');
//     echo'<script>window.location.href="/SaleOnlineWebDeveloper/page/index.php?manager=AccountDashBoard" </script>';
//     }else{
//       echo '<script>alert("Tai khoan hoac mat khau khong dung")</script>';
//     }
//   }
// }

	 
	  
	


?>