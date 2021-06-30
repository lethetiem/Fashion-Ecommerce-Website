<?php
include('/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php');
if(isset($_POST['Login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql_login_index = "SELECT * FROM tbl_register WHERE username = '$username' AND password = '$password'";
   $row = mysqli_query($mysqli, $sql_login_index);
   $count = mysqli_num_rows($row);
   if($count > 0){
    $row_data = mysqli_fetch_array($row);
    $_SESSION['btn-save'] = $row_data['lastname'];
    header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=Bag');
    }else{
    echo('<p style = "color: red">Sai ten hoac mat khau!</p>');
  }
}
  
?>

<div class="container">
        
        <h1 class="account_td">ACCOUNT</h1>
        
        <div id="create">
          <h2 class="customers">NEW CUSTOMERS</h2>
          <p>
              <a class="bca" >By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</a>
          </p>
          <div class="register_wrap">
            <a href = "/SaleOnlineWebDeveloper/page/index.php?manager=Register" class = "register" > CREATE ACCOUNT </a>
          </div>    
        </div>
          <div id="login">
            <form action="" method="POST">
              <h2 class="customers">REGISTERED CUSTOMERS</h2>
              <input type="text" class="form-control" placeholder="user name" id ="username" name="username" required />
              <br>
              <input type="password" class="form-control" id ="password" name="password" placeholder="password" />
              <br>
              <a href="#" class="lk"> forgot password?</a>
              <br>
              <input class="login1" name="Login"    type="submit" id="btn" value="LOG IN">
              </form>
                
          </div>



          </div>