<?php
 
     session_start();
     include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php");
     if(isset($_POST['login'])){
         $username = $_POST['username'];
         $password = md5($_POST['password']);
           $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";
         //$sql = "SELECT * FROM tbl_loginadmin WHERE username = '$username' AND password = '$password'";
        
         $row = mysqli_query($mysqli, $sql);
         $count = mysqli_num_rows($row);
         if($count > 0){
             $_SESSION['login'] = $username;
             header('Location:/SaleOnlineWebDeveloper/admincp/index.php');
         }else{
             header('Location:/SaleOnlineWebDeveloper/admincp/login.php');
         } 
    }
 ?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Login to admin page</title>      
</head>
<body>
    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">HEARTUALL</h2>

        <!-- <form id="login-admin"method="POST" action="/SaleOnlineWebDeveloper/admincp/ajax.php" class="login-container">
            <p><input type="text" placeholder="Admin" id="username" name="username"></p>
            <p><input type="password" placeholder="Password" id="password" name="password"></p>
            <p><input type="submit" id="dangnhap" value="Log in"></p> -->
            
        <form action="/SaleOnlineWebDeveloper/admincp/login.php" method="POST" class="login-container">
            <p><input name="username" type="text" placeholder="Admin"></p>
            <p><input name="password" type="password" placeholder="Password"></p>
            <p><input name = "login" type="submit" value="Log in"></p> 
        </form>
    </div>
    <p id = "response"> </p>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#login-admin").submit(function(event){
            event.preventDefault();
            var username = $("#username").val();
            var password = $("#password").val();
            if(username == "" || password == ""){
                alert('Please fill in the blanks');
            }
            else{
                
                $.ajax({
                type: "POST",
                url:'/SaleOnlineWebDeveloper/admincp/ajax.php' ,
                data:  $( this ).serializeArray(),
                success: function(response){
                  response = JSON.parse(response);
                  if(response.status == 0){
                      alert(response.message);
                  }
                  else{
                      alert(response.message);
                      window.location.href = "index.php";
                  }
                },   
            });
            }
        });
    });
    </script>
</body>
</html>