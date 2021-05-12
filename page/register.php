<?php 
  $conn = mysqli_connect("localhost", "root","","register");
  if(isset ($_POST['btn'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $dang_ky = mysql_query($conn, "INSERT INTO users(Firstname, Lastname, Username, Password) VALUES('".$firstname."','".$lastname."','".$username."','".$password."')");
  }
  if($dang_ky){
    echo "Creat account sucessfully";
  }
 


?>