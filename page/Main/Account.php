<?php
//include('/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php');
//if(isset($_POST['Login'])){
//   $username = $_POST['username'];
//   $password = $_POST['password'];
//   $sql_login_index = "SELECT * FROM tbl_register WHERE username = '$username' AND password = '$password'";
//   $row = mysqli_query($mysqli, $sql_login_index);
//   $count = mysqli_num_rows($row);
//  if($count > 0){
//    $row_data = mysqli_fetch_array($row);
//    $_SESSION['btn-save'] = $row_data['lastname'];
//    header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=Bag');
//    }else{
//    echo('<p style = "color: red">Sai ten hoac mat khau!</p>');
//  }
//}

  
?>
<?php
          
if(empty($_SESSION['customer'])){
  ?>
            

<div class="container">
        
        <h1 class="account_td">ACCOUNT</h1>
        
        <div id="create">
          <h2 class="customers">NEW CUSTOMERS</h2>
          <p>
              <a class="bca" >By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</a>
          </p>
          <div class="register_wrap">
            <a href = "/SaleOnlineWebDeveloper/page/index.php?manager=Register" class = "login1" > CREATE ACCOUNT </a>
          </div>    
        </div>
          <div id="login">

            <form id ="login_form" action="/SaleOnlineWebDeveloper/page/login.php" method="POST">

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
          
          
        

          <?php
          }else{


          
          
            ?>
            <div class="container">
        
        <h1 class="account_td">ACCOUNT</h1>
  
                
          <div id="register">
            <form id ="register_form"action="/SaleOnlineWebDeveloper/page/register.php" method="POST">
            
              <h2 class="register_td">REGISTER</h2>
              <input type="text" class="flname"  id ="firstname" name="firstname" placeholder="first name" required />
              <input type="text" class="flname"  id ="lastname" name="lastname" placeholder="last name" required />
              <br>
              
              <input type="text" placeholder="user name" id ="username" name="username" required />
              <br>
              <input type="password"  id ="password" name="password" placeholder="password"required />
              
              <br>
              <input class="login1"   type="submit" id="btn" name="btn-save" value="CREATE">
              <br>
              <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Account&id=1" class="bca"> Back to login</a>
            </form>
             
              
                
          </div>
           
           <?php
            }
          ?>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

              },

          });
        
        });
        
      </script>
        



          </div>