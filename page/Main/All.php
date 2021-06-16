<?php
        $sql_pro = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc  ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
        $query_pro = mysqli_query($mysqli, $sql_pro);
      
?> 






<div class="section-collection">
      <div class="collection__header">
        <h1 class="collection__header-title">ALL</h1>
        <!-- <button class="collection__header-filter">Filter</button> -->
      </div>
      <ul class="collection__products">
        <?php
          while($row = mysqli_fetch_array($query_pro)){
        ?>
        <li class="collection__product">
          <div class="product__card">
            <div class="product__card-variants">
              <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Details&id=<?php echo $row['id_sanpham'] ?>" class="product__card-variant variant-card">
                <div class="ratio-box">
                  <img
                    src="../admincp/Modules/Quanlisp/Uploads/<?php echo $row['hinhanh'] ?>"
                    alt=""
                    class="lazyautosizes lazyloaded"
                  />
                </div>
              </a>
            </div>
            <a href="#" class="product__card-title"><?php echo $row['tensp'] ?></a>
            <span class="product_card-price"><?php echo number_format($row['giasp']).' VND'?></span>
          </div>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>