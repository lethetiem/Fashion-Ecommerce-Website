
<?php
        $sql_chitiet = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
        $query_chitiet = mysqli_query($mysqli, $sql_chitiet);

        while($row_chitiet = mysqli_fetch_array($query_chitiet)){
      
?> 

        
<p align = "center"> Details </p>

            <a width = "20%"  href="/SaleOnlineWebDeveloper/page/index.php?manager=Details&id=<?php echo $row_pro['id_sanpham'] ?>" class="product__card-variant variant-card">
                <div class="ratio-box">
                  <img
                    src="../admincp/Modules/Quanlisp/Uploads/<?php echo $row_chitiet['hinhanh'] ?>"
                    alt=""
                    class="lazyautosizes lazyloaded"
                  />
                </div>
            </a>
            

<?php
        }
?>