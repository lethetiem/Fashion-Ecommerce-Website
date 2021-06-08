       

 <div class="add-product-table">
    <table class="styled-product-table">
        <form method = "POST" action= "Modules/Quanlisp/Xuly.php" enctype = "multipart/form-data">
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
                        <input class="product__name" type="text" name = "Tensanpham" placeholder="Tên sản phẩm">        
                    </td>
                    <td>
                        <input class="product__name" type="text" name = "masp" placeholder="Mã sản phẩm">        
                    </td>
                    <td>
                        <input class="product__name" type="text" name = "giasp" placeholder="Giá sản phẩm">
                    </td>
                    <td>
                        <input class="product__name" type="text" name = "soluong" placeholder="Số lượng">
                    </td>
                    <td>
                        <select name ="tinhtrang" >
                            <option value = "1">Kích hoạt</option>
                            <option value = "0">Ẩn</option>
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
                        <textarea rows = "5" name = "Noidung" style ="resize: none"></textarea>
                    </td>
                    <td>
                        <textarea rows = "5" name = "tomtat" style = "resize: none"></textarea>
                    </td>
                    <td>
                        <input type = "file" name ="hinhanh">
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
                    <input type="submit" class="btn-add-product-table" name = "themdanhmuc" value = "Thêm sản phẩm">
                </td>
            </tbody>
        </form>
    </table>
</div>
