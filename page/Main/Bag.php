<?php
include('/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php');

if(isset($_POST['themgiohang'])){
  $tensp = $_POST['tensp'];
  $giasp = $_POST['giasp'];
  $soluong = $_POST['soluong'];
  $hinhanh = $_POST['hinhanh'];
  $id_sanpham = $_POST['idsanpham'];
  $sql_select_giohang = mysqli_query($mysqli, "SELECT * FROM tbl_giohang WHERE id_sanpham = '$id_sanpham'");
  $count = mysqli_num_rows($sql_select_giohang);
  if($count > 0){
    $row_sanpham = mysqli_fetch_array($sql_select_giohang);
    $soluong = $row_sanpham['soluong'] + 1;
    $sql = "UPDATE tbl_giohang SET soluong = '$soluong' WHERE id_sanpham = '$id_sanpham'";

  }else{
    $soluong = $soluong;
    $sql = "INSERT INTO tbl_giohang(tensp, giasp, soluong, hinhanh, id_sanpham) value('$tensp', '$giasp', '$soluong', '$hinhanh', '$id_sanpham')";
  }
  
  $insert_rows = mysqli_query($mysqli, $sql);
  if($sql == 0){
    header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=Details?idsanpham='.$id_sanpham);
  }

}elseif(isset($_POST['btn-update-cart'])){
  for($i = 0; $i < count($_POST['product__id']); $i++){
     $id_sanpham = $_POST['product__id'][$i];
     $soluong = $_POST['number__'][$i];
     if($soluong == 0){
       $sql_delete_cart = mysqli_query($mysqli, "DELETE FROM tbl_giohang WHERE id_sanpham = '$id_sanpham'");
     }else{
      $sql_update_cart = mysqli_query($mysqli, "UPDATE tbl_giohang SET soluong = '$soluong' WHERE id_sanpham ='$id_sanpham' ");
     }
  }
 
}elseif(isset($_GET['xoa'])){
  $id = $_GET['xoa'];
  $sql_remove_product = mysqli_query($mysqli, "DELETE FROM tbl_giohang WHERE id_sanpham = '$id'");
}




?>





<div class="section-main">
      <div class="page">
        <h1 class="page__cart-title">Your Cart</h1> 

        <?php
          $sql_giohang = mysqli_query($mysqli, "SELECT * FROM tbl_giohang ORDER BY id_giohang DESC");
        ?>


      
     
       <form action="/SaleOnlineWebDeveloper/page/index.php?manager=Bag" method = "POST" class="page__cart-form">
       
      
       

          <div class="page__cart-products">
          <?php
          $i = 0;
          $total = 0;
          while($row_fetch_giohang = mysqli_fetch_array($sql_giohang)){
            $subtotal = $row_fetch_giohang['soluong'] * $row_fetch_giohang['giasp'];
            $total += $subtotal;
            $i++;
          ?>    
            <div class="page__cart-product">
              <a href="#" class="page__cart-product-img">
                <div class="ratio-box">
                  <img src="../admincp/Modules/Quanlisp/Uploads/<?php echo $row_fetch_giohang['hinhanh'] ?>" alt="" class="overlay" />
                </div>
              </a>
              <div class="page__cart-product-info">
                <h1 class="page__cart-product-title">
                  <a href="#" class="page__cart-product-name"
                    ><?php echo $row_fetch_giohang['tensp'] ?></a
                  >
                  <a href="?manager=Bag&xoa=<?php echo $row_fetch_giohang['id_sanpham'] ?>" class="page__cart-product-remove">
                    <span class="page__cart-product-remove-text">Remove</span>
                  </a>
                </h1>
                <span class="page__cart-product-variant">White / M</span>

                     

                <div class="page__cart-product-btns">
                 <!-- <a href="?manager=Bag&tru=" class="page__cart-product-btn">-</a>
                 <a name="add__number[]" href="?manager=Bag&cong=" class="page__cart-product-btn">+</a>-->
                <input type="hidden" name ="product__id[]" class="page__cart-product-input" value="<?php echo $row_fetch_giohang['id_sanpham'] ?>" />
                <input type="number" name ="number__[]" min = "0" max = "15" class="page__cart-product-input" value="<?php echo $row_fetch_giohang['soluong']?>" />

                </div>
                <div class="page__cart-product-price">
                  <span><?php echo number_format($row_fetch_giohang['giasp']).' VND' ?></span>
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
              <span class="page__cart-subtotal-price"><?php echo number_format($total).' VND' ?></span>
            </div>
            <p class="page__cart-disclamer">
              Shipping & taxes calculated at checkout
            </p>
            <div class="page__cart-footer" >
              <button name="btn-update-cart" class="page__cart-btn page__cart-btn-update">
                Update cart
              </button>
              <button class="page__cart-btn page__cart-btn-checkout">
                Checkout
              </button>
            </div>
          </div>
         
        </form>

       <!-- <form action="#" class="page__cart-form">
          <div class="page__cart-sidebar">
            <div class ="page__cart-footer">
              <button class="page__cart-btn page__cart-btn-checkout">
                Checkout
              </button>
            </div>
          <div>
        </form> -->


        
      </div>
    </div> 
    





    
  