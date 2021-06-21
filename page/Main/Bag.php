<?php
include('/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php');

if(isset($_POST['themgiohang'])){
  $tensp = $_POST['tensp'];
  $giasp = $_POST['giasp'];
  $soluong = $_POST['soluong'];
  $hinhanh = $_POST['hinhanh'];
  $id_sanpham = $_POST['idsanpham'];
  $sql = "INSERT INTO tbl_giohang(tensp, giasp, soluong, hinhanh, id_sanpham) value('$tensp', '$giasp', '$soluong', '$hinhanh', '$id_sanpham')";
  $query_giohang = mysqli_query($mysqli, $sql);

  if($query_giohang == 0){
    header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=Details?idsanpham='.$id_sanpham);
  }

}

?>






      <div class="page">
        <h1 class="page__cart-title">Your Cart</h1> 

        <?php
          $row_giohang = mysqli_query($mysqli, "SELECT * FROM tbl_giohang ORDER BY id_giohang DESC");
        ?>


      
     
       <form action="" class="page__cart-form">
       
          

            <div class="page__cart-products">    

         <?php
          while($row_fetch_giohang = mysqli_fetch_array($row_giohang)){
        ?>


               <div class="page__cart-product">
                <a href="#" class="page__cart-product-img">
                  <div class="ratio-box">
                    <img src="../admincp/Modules/Quanlisp/Uploads/<?php echo $row_fetch_giohang['hinhanh'] ?>" alt="" class="overlay" />
                    <img src="../admincp/Modules/Quanlisp/Uploads/" alt="" class="overlay" />
                  </div>
                </a>
                <div class="page__cart-product-info">
                  <h1 class="page__cart-product-title">
                    <a href="#" class="page__cart-product-name"
                      ><?php echo $row_fetch_giohang['tensp'] ?></a
                    > 
                    <!-- <a href="#" class="page__cart-product-name"
                      >></a 
                    > -->
                    <a href="#" class="page__cart-product-remove">
                      <span class="page__cart-product-remove-text">Remove</span>
                    </a>
                  </h1>
                  <span class="page__cart-product-variant">White / M</span>
  
                       
  
                  <div class="page__cart-product-btns">
                    <button class="page__cart-product-btn">-</button>
                    <input type="text" class="page__cart-product-input" />
                    <button class="page__cart-product-btn">+</button>
                  </div>
                  <div class="page__cart-product-price">
                    <span>đ1,428,700</span>
                  </div>
                </div>
              </div> 

            <?php
            }
            ?> 
            </div>
         
          <div class="page__cart-sidebar" >
            <div class="page__cart-subtotal">
              <h2 class="page__cart-subtotal-title">Subtotal</h2>
              <span class="page__cart-subtotal-price">đ1,428,700</span>
            </div>
            <p class="page__cart-disclamer">
              Shipping & taxes calculated at checkout
            </p>
            <div class="page__cart-footer">
              <button class="page__cart-btn page__cart-btn-update">
                Update cart
              </button>
              <button class="page__cart-btn page__cart-btn-checkout">
                Checkout
              </button>
            </div>
          </div>
         
        </form>
      </div>
  
    





    
  