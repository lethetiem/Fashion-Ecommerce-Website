<?php
  if(isset($_POST['btn-save'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_register = "INSERT INTO tbl_register(firstname, lastname, username, password) VALUE('$firstname', '$lastname', '$username', '$password')";
    $sql_register_query = mysqli_query($mysqli, $sql_register);
    if($sql_register_query){
      echo '<p style="color:green">Bạn đã đăng kí thành công</p> ';
    }
  }
?>



<div class="container">
        
        <h1 class="account_td">ACCOUNT</h1>
  
                
          <div id="register">
            <form action="" method="POST">
              <h2 class="register_td">REGISTER</h2>
              <input type="text" class="flname"  id ="firstname" name="firstname" placeholder="first name" required />
              <input type="text" class="flname"  id ="lastname" name="lastname" placeholder="last name" required />
              <br>
              
              <input type="text" placeholder="user name" id ="username" name="username" required />
              <br>
              <input type="password"  id ="password" name="password" placeholder="password" />
              
              <br>
              <input class="login1"   type="submit" class="btn" name="btn-save" value="CREATE">
              <br>
              <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Account&id=1" class="bca"> Back to login</a>
              </form>
                
          </div>

       </div>