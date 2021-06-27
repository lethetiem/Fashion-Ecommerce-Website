<?php
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC";
        $query_pro = mysqli_query($mysqli, $sql_pro);
        //get ten danh muc
        $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1"; 
        $query_cate = mysqli_query($mysqli, $sql_cate);
        $row_title = mysqli_fetch_array($query_cate);
      
?> 


<div class="section-collection">
      <div class="collection__header">
        <h1 class="collection__header-title" ><?php echo $row_title['name'] ?></h1>
        <!-- <button class="collection__header-filter">Filter</button> -->
      </div>
      <ul class="collection__products">
        <?php
          while($row_pro = mysqli_fetch_array($query_pro)){
        ?>
        <li class="collection__product">
          <div class="product__card">
            <div class="product__card-variants">
              <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Details&id=<?php echo $row_pro['id_sanpham'] ?>" class="product__card-variant variant-card">
                <div class="ratio-box">
                  <img
                    src="../admincp/Modules/Quanlisp/Uploads/<?php echo $row_pro['hinhanh'] ?>"
                    alt=""
                    class="lazyautosizes lazyloaded"
                  />
                </div>
              </a>
            </div>
            <a href="#" class="product__card-title"><?php echo $row_pro['tensp'] ?></a>
            <span class="product_card-price"><?php echo number_format($row_pro['giasp']).' VND'?></span>
          </div>
        </li>
        <?php
          }
        ?>
       
      </ul>
    
    </div>