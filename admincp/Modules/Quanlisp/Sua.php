<?php
    $sql_Sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query_Sua_sp = mysqli_query($mysqli, $sql_Sua_sp);
?>       
           

 <div class="add-product-table">
    <table class="styled-product-table">

    <?php
        while($row = mysqli_fetch_array($query_Sua_sp)){
    ?>
        <form method = "POST" action= "Modules/Quanlisp/Xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype = "multipart/form-data">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Mã sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tình trạng</th>
                </tr>
            </thead>
            <tbody>
                <tr  class="active-row">
                    <td>
                        <input class="product__name" type="text"  value = "<?php echo $row['tensp'] ?>" name = "Tensanpham"  placeholder="Tên sản phẩm">        
                    </td>
                    <td>
                        <input class="product__name" type="text"  value = "<?php echo $row['masp'] ?>"  name = "masp" placeholder="Mã sản phẩm">        
                    </td>
                    <td>
                        <input class="product__name" type="text"  value = "<?php echo $row['giasp'] ?>" name = "giasp" placeholder="Giá sản phẩm">
                    </td>
                    <td>
                        <input class="product__name" type="text"  value = "<?php echo $row['soluong'] ?>" name = "soluong" placeholder="Số lượng">
                    </td>
                    <td>
                        <select name ="tinhtrang" >
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
            </tbody>
            <thead>
                <tr>
                    <th>Nội dung</th>
                    <th>Tóm tắt</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục sản phẩm</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr  class="active-row">
                    <td>
                        <textarea rows = "5" name = "Noidung" style ="resize: none"><?php echo $row['noidung'] ?></textarea>
                    </td>
                    <td>
                        <textarea rows = "5" name = "tomtat" style = "resize: none"><?php echo $row['tomtat'] ?></textarea>
                    </td>
                    <td>
                        <input type = "file" name ="hinhanh">
                        <img src="Modules/Quanlisp/Uploads/<?php echo $row['hinhanh']?>" width = "100px"></td>

                    </td>
                    <td>
                            <select  name ="danhmuc">
                                <?php
                                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                ?>
                                <option value = "<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <td >
                    <input type="submit" class="btn-add-product-table" name = "Suadanhmuc" value = "Sửa sản phẩm">
                </td>
            </tbody>
        </form>

        <?php
        }
        ?>

    </table>
</div>
