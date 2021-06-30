<?php
        if(isset($_POST['Search__product__keyword'])){
            $keyword = $_POST['text__keyword'];
        }

        $sql_search_product = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensp LIKE '%".$keyword."%'";
        $query_search_product = mysqli_query($mysqli, $sql_search_product);
      
?> 






<div class="section-collection">
      <div class="collection__header">
        <h1 class="collection__header-title"><?php $_POST['text__keyword']?></h1>
        <!-- <button class="collection__header-filter">Filter</button> -->
      </div>
      <ul class="collection__products">
        <?php
          while($row = mysqli_fetch_array($query_search_product)){
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