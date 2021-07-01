

<?php
  $mysqli = mysqli_connect("localhost","root","","Sale_online");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}


  
if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["username"]) && isset($_POST["password"]))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $dang_ky = mysqli_query($mysqli, "INSERT INTO tbl_register(firstname, lastname, username, password) VALUE('".$firstname."','".$lastname."','".$username."','".$password."')");

    if($dang_ky){

      echo"Registration Successful";

    }
    else{
      echo"Registration Failed";

    }
      
  }
 
?> 
