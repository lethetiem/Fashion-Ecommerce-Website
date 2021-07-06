<div class="list-table">
    <?php
        if(isset($_POST['capnhapdonhang'])){
            $xuly_donhang = $_POST['xulydonhang'];
            $xuly_mahang = $_POST['xulymahang'];
            $sql_update_donhang = "UPDATE tbl_donhang SET tinhtrang='$xuly_donhang' WHERE mahang='$xuly_mahang'";
            $sql_update_query = mysqli_query($mysqli, $sql_update_donhang);
            header('Location:index.php?action=Quanlidonhang&query=Them');
        }
    ?>
    <?php
        $mathang = $_GET['mahang'];
        $sql_chitiet = "SELECT * FROM tbl_donhang, tbl_sanpham WHERE tbl_donhang.id_sanpham = tbl_sanpham.id_sanpham AND tbl_donhang.mahang  = '$mathang'
        ORDER BY tbl_donhang.id_donhang";
        $sql_chitiet_query = mysqli_query($mysqli, $sql_chitiet);

    ?>

    <form method="POST" action="">

            <table class = "styled-list-table"  >

                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>

                <tbody>
                        <?php
                            $i = 0;
                            $total = 0;
                            while($row_chitiet = mysqli_fetch_array($sql_chitiet_query)){
                            $subtotal = $row_chitiet['soluongmua'] * $row_chitiet['giasp'];
                            $total += $subtotal;
                            $i++;
            
                        ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row_chitiet['masp']?></td>
                        <td><?php echo $row_chitiet['tensp']?></td>
                        <td><?php echo $row_chitiet['soluongmua']?></td>
                        <td><?php echo number_format($row_chitiet['giasp']).' VND'?></td>
                        <td><?php echo number_format($row_chitiet['soluongmua'] * $row_chitiet['giasp']).' VND'?></td> 
                        <input type="hidden" name="xulymahang" value="<?php echo $row_chitiet['mahang'] ?>"  />  
                    </tr>

                    <?php
                            }
                    ?>   
            
                    <tr>
                        <td colspan="6">
                            Tổng tiền: <?php echo number_format($total).' VND'?>
                        </td>
                    </tr>

                </tbody>  
        
            </table>
            <select class="list-table" name="xulydonhang">
                <option value="1">Đã xử lý</option>
                <option value="0">Chưa xử lý</option>
            </select>
            
            <input type="submit" name="capnhapdonhang" value="Update" class="btn-add-product">

    </form>

    

</div>
