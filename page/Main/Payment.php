<?php
if(isset($_POST['btn-pay'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['street_address'];
    $city=$_POST['City'];
    $phone_number=$_POST['Phone_number'];
    $email=$_POST['Email_address'];
}
?>


<div class="section-header">
      <div class="header__container">
        <header class="header">
          <div class="header__logo-container">
            <a href="index.php" class="header__logo">
              <img src="/SaleOnlineWebDeveloper/images/03-voov.jpg" alt="" class="header__logo-img" />
            </a>
          </div>
        </header>
      </div>
</div>
  




<!--<p align = "center">PAYMENT</p>
<p align = "center">Shipping</p>
<p align ="center">Shipping Address</p>
<br>
<br>
<br>
<form align = "center" action="" method="POST">
<input tyoe="text" name="Firstname">    <input type="text" name="Lastname">

</form>-->



<div class="container">
        
<div class="payment">
  
      <h1 class="payment_td">SHIPPING</h1>
    
               
              <hr width="100%" color="black"  size="2px">
            
              <h2 class="payment_td">SHIPPING ADDRESS</h2>
              <hr width="99.5%" color="black"  size="2px">
            <form id ="payment_form"action="/SaleOnlineWebDeveloper/page/paymentmanager=PaymentDetails" method="POST">
             
              
                
                    
                  <input type="text" class="payment_text"  id ="firstname" name="firstname" placeholder="First name" required />
                   <input type="text" class="payment_text"  id ="lastname" name="lastname"  placeholder="Last name"required />
                
                
              
                  <input type="text" class="payment_text1"  id ="street address" name="street_address" placeholder="Street address" required />
                
                
                   
                  <input type="text" class="payment_text1"  id ="city" name="city" placeholder="City" required />
                
                    
                  <input type="text" class="payment_text"  id ="phone" name="phone"  placeholder="Phone_number" required />
             
                  <input type="text" class="payment_text"  id ="email" name="email" placeholder="Email_address" required />
 
             
              
                  <input class="pay"   type="submit" id="btn_pay" name="btn-pay" value="PAY AND PLACE ORDER">
              <br>
              
            </form>
            
            <hr width="100%" color="black"  size="2px">
     
          </div>
 </div>
