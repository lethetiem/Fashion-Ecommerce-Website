<?php
  $mysqli = mysqli_connect("localhost","root","","Sale_online");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}


  
  if(isset($_POST['btn-save']))
  {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $dang_ky = mysql_query($mysqli, "INSERT INTO tbl_Register(firstname, lastname, username, password) VALUE('".$firstname."','".$lastname."','".$username."','".$password."')");

    if($dang_ky){
    echo '<p style="color:green">Creat account sucessfully"</p>';
    }


  }
 

?>