<?php
  //  if(isset($_SESSION['Login'])){
      //  header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=AccountDashBoard');
    //}
?>
<?php
if(isset($_POST['Login'])){
 $username = $_POST['username'];
  $password = md5($_POST['password']);
  if($username == '' || $password == ''){
   echo '<script>alert("Lam on khong de trong")</script>';
  }else{
   $sql_select_register = mysqli_query($mysqli, "SELECT * FROM tbl_register WHERE username = '$username' AND password = '$password' LIMIT 1");
   $count = mysqli_num_rows($sql_select_register);
    $row_login = mysqli_fetch_array($sql_select_register);
   if($count > 0){
      $_SESSION['Login'] = $username;
      $_SESSION['id_register'] = $row_login['id_register'];
          header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=AccountDashBoard');
     echo'<script>window.location.href="/SaleOnlineWebDeveloper/page/index.php?manager=AccountDashBoard" </script>';
    }else{
     echo '<script>alert("Tai khoan hoac mat khau khong dung")</script>';
   }
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
            <a href = "/SaleOnlineWebDeveloper/page/index.php?manager=Register" class = "creat_account" > CREATE ACCOUNT </a>
          </div>    
        </div>
          <div id="login">
            <form id action="" method="POST">
            <!--<form id ="login_form" action="/SaleOnlineWebDeveloper/page/login.php" method="POST">-->
              <h2 class="customers">REGISTERED CUSTOMERS</h2>
              <input type="text" class="form-control" placeholder="user name" id ="username" name="username" />
              <br>
              <input type="password" class="form-control" id ="password" name="password" placeholder="password" />
              <br>
              <a href="#" class="lk"> forgot password?</a>
              <br>
                <input class="login1" name="Login"    type="submit" id="btn" value="LOG IN">
              </form>
                
          </div>
</div>
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                   
          <script>
        


          $( "#login_form" ).submit(function( event ) {


          event.preventDefault();
          $.ajax({
            type: "POST",
            url:'/SaleOnlineWebDeveloper/page/login.php' ,
            data:  $( this ).serializeArray(),
              success: function(response){
                response = JSON.parse(response);
                if(response.status==0){
                  alert(response.message);

                }
                else{
                  alert(response.message);

                  window.location.href = "/SaleOnlineWebDeveloper/page/index.php?manager=Bag";

                }

              }

          });

        });

      </script>-->
     
