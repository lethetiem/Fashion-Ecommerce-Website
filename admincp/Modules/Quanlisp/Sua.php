<?php
    $sql_Sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query_Sua_sp = mysqli_query($mysqli, $sql_Sua_sp);
?>



<div class="add-table">
    <table class="styled-table">
    
    <?php
        while($row = mysqli_fetch_array($query_Sua_sp)){
    ?>

        <form method = "POST" action="Modules/Quanlisp/Xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype = "multipart/form-data">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <td>
                        <input class="product__name" type="text" value = "<?php echo $row['tensp'] ?>" name = "Tensanpham">
                    </td>
                </tr>

                <tr>
                    <th>Mã sản phẩm</th>
                    <td>
                        <input class="product__name" type="text" value = "<?php echo $row['masp'] ?>" name = "masp">
                    </td>
                </tr>
            
                <tr>
                    <th>Giá sản phẩm</th>
                    <td>
                        <input class="product__name" type="text" value = "<?php echo $row['giasp'] ?>" name = "giasp">
                    </td>
                </tr>
                <tr>
                    <th>Số lượng</th>
                    <td>
                        <input class="product__name" type="text" value = "<?php echo $row['soluong'] ?>" name = "soluong">
                    </td>
                </tr>
                <tr>
                    <th>Nội dung</th>
                    <td><textarea rows = "5" name = "Noidung" style ="resize: none"><?php echo $row['noidung'] ?></textarea></td>
                </tr>
                <tr>
                    <th>Tóm tắt</th>
                    <td><textarea rows = "5" name = "tomtat" style = "resize: none"><?php echo $row['noidung'] ?></textarea></td>
                </tr>
                <tr>
                    <th>Hình ảnh</th>
                    <td><input type = "file" name ="hinhanh">
                    <img src="/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlisp/Uploads<?php echo $row['hinhanh']?>" width = "150px"></td>
                </tr>

                <tr>
                    <th>Danh mục sản phẩm</th>
                        <td>
                            <select  name ="danhmuc">
                                <?php
                                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                    if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
                                ?>
                                <option selected value = "<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['name'] ?></option>
                                <?php
                                }else{
                                ?>
                                <option value = "<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['name'] ?></option>
                                <?php
                                 }
                                }
                                ?>

                            </select>
                        </td>
                </tr> 

                <tr>
                    <th>Tình trạng</th>
                        <td>
                            <select name ="tinhtrang">
                                <?php
                                if($row['tinhtrang'] == 1){
                                ?>
                                <option value = "1" selected>Kích hoạt</option>
                                <option value = "0">Ẩn</option>
                                <?php
                                }else{
                                ?>
                                <option value = "1">Kích hoạt</option>
                                <option value = "0" selected>Ẩn</option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                </tr>
            </thead>

            <tbody>
                <tr class="submit__container">
                   <td >
                       <input type="submit" class="btn-add-product" name = "Suadanhmuc" value = "Sữa sản phẩm">
                   </td>
                   <td>
                    </td>
                </tr>
                <!-- and so on... -->
            </tbody>
        </form>

        <?php
        }
        ?>
    </table>
</div>


