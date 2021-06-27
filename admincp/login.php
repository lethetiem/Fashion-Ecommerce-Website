<?php
    session_start();
    include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php");
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
         $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";
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

        <form action="/SaleOnlineWebDeveloper/admincp/login.php" method="POST" class="login-container">
            <p><input name="username" type="text" placeholder="Admin"></p>
            <p><input name="password" type="password" placeholder="Password"></p>
            <p><input name = "login" type="submit" value="Log in"></p>
        </form>
    </div>
</body>
</html>