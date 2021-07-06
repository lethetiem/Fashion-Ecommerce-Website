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
        <div class="paymentdetails_head">
          <a href="#" class="icon_check">
            <i class="fas fa-check-circle"></i>
          </a>
            <a href="#" class="paymentdetails_td1">
            
          You ordered succeed 
          </a>
        </div>
      
        <?php
            $sql_select_paymentdetails = "SELECT * FROM tbl_khachhang, tbl_donhang WHERE tbl_khachhang.id_khachhang = tbl_donhang.id_khachhang ORDER BY tbl_donhang.id_donhang DESC";
            $sql_select_query = mysqli_query($mysqli, $sql_select_paymentdetails);
            if($row_paymentdetails = mysqli_fetch_array($sql_select_query)){

        ?>
  
      
        <div class="paymentdetails_text">Thanks for your order </div>
        <div class="paymentdetails_text">Order code #<?php echo $row_paymentdetails['mahang']?></div>
        <div class="paymentdetails_bd">
        <h2 class="paymentdetails_td">Order information </h2>
        <table class="paymentdetails_tb">
        <tr>
            <td class="paymentdetails_texttb1">Customer name : </td>
            <td class="paymentdetails_texttb "><?php echo $row_paymentdetails['firstname'].' '.$row_paymentdetails['lastname']?></td>
            
        </tr>
        <tr>
            <td class="paymentdetails_texttb1">Phone number : </td>
            <td class="paymentdetails_texttb "><?php echo $row_paymentdetails['phone_number']?></td>
            
        </tr>
        <tr>
            <td class="paymentdetails_texttb1">Email address : </td>
            <td class="paymentdetails_texttb "><?php echo $row_paymentdetails['email']?></td>
            
        </tr>
        <tr>
            <td class="paymentdetails_texttb1"> Street address : </td>
            <td class="paymentdetails_texttb "><?php echo $row_paymentdetails['street_address']?></td>
            
        </tr>
        <tr>
            <td class="paymentdetails_texttb1">City : </td>
            <td class="paymentdetails_texttb "><?php echo $row_paymentdetails['city']?></td>
            
        </tr>

        <?php
            }
        ?>
      </table>

      </div>
    
      <a href="/SaleOnlineWebDeveloper/page/index.php" class="keeponbuying">KEEP ON BUYING</a>


     

              
           
     
    </div>
</div>

