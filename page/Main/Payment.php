<?php
if(isset($_POST['btn-pay'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['street_address'];
    $city=$_POST['city'];
    $phone_number=$_POST['phone'];
    $email=$_POST['email'];
    $slq_payment = "INSERT INTO tbl_khachhang(firstname, lastname, street_address, email, phone_number, city) VALUES('".$firstname."', '".$lastname."', '".$address."', '".$email."', '".$phone_number."', '".$city."')";
    $sql_payment_query = mysqli_query($mysqli, $slq_payment);
    if($sql_payment_query){
        $sql_select_khachhang = mysqli_query($mysqli, "SELECT * FROM tbl_khachhang ORDER BY id_khachhang DESC LIMIT 1");
        $mahang = rand(0, 9999);
        $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
        $id_khachhang = $row_khachhang['id_khachhang'];
        for($i = 0; $i < count($_POST['thanhtoan_product_id']); $i++){
            $id_sanpham = $_POST['thanhtoan_product_id'][$i];
            $soluong = $_POST['soluongmua'][$i];
            $sql_insert_donhang = mysqli_query($mysqli, "INSERT INTO tbl_donhang(id_sanpham, soluongmua, mahang, id_khachhang) VALUES('".$id_sanpham."', '".$soluong."', '".$mahang."', '".$id_khachhang."')");
            $sql_insert_giaodich = mysqli_query($mysqli, "INSERT INTO tbl_giaodich(id_sanpham, soluongmua, magiaodich, id_khachhang) VALUES('".$id_sanpham."','".$soluong."', '".$mahang."', '".$id_khachhang."')");
            $sql_delete_payment = mysqli_query($mysqli, "DELETE FROM tbl_giohang WHERE id_sanpham = '$id_sanpham'");
        }
    }
    
    header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=PaymentDetails');
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
  






<div class="container">
        
<div class="payment">
  
      <h1 class="payment_td">SHIPPING</h1>
    
               
              <hr width="100%" color="black"  size="2px">
            
              <h2 class="payment_td">SHIPPING ADDRESS</h2>
              <hr width="99.5%" color="black"  size="2px">
            <form id ="payment_form"action="" method="POST">
             
              
                
                    
                  <input type="text" class="payment_text"  id ="firstname" name="firstname" placeholder="First name" required />
                   <input type="text" class="payment_text"  id ="lastname" name="lastname"  placeholder="Last name"required />
                
                
              
                  <input type="text" class="payment_text1"  id ="street address" name="street_address" placeholder="Street address" required />
                
                
                   
                  <input type="text" class="payment_text1"  id ="city" name="city" placeholder="City" required />
                
                    
                  <input type="text" class="payment_text"  id ="phone" name="phone"  placeholder="Phone number" required />
             
                  <input type="text" class="payment_text"  id ="email" name="email" placeholder="Email address" required />

                  <?php
                  $sql_select_giohang = mysqli_query($mysqli, "SELECT * FROM tbl_giohang ORDER BY id_giohang");
                  while($row_giohang = mysqli_fetch_array($sql_select_giohang)){
                  ?>
 
                <input type="hidden" class="payment_text" name="thanhtoan_product_id[]" value="<?php echo $row_giohang['id_sanpham'] ?>">
                <input type="hidden" class="payment_text" name="soluongmua[]" value="<?php echo $row_giohang['soluongmua'] ?>" >


                <?php
                  }
                ?>
              
                  <input class="pay"   type="submit" id="btn_pay" name="btn-pay" value="PAY AND PLACE ORDER">
              <br>
              
            </form>
            
            <hr width="100%" color="black"  size="2px"><br>
            <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Bag" class="bca"> Back to bag</a>
     
          </div>
 </div>
