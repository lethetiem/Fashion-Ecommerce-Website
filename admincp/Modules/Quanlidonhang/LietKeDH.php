<?php
    $sql_select = "SELECT * FROM tbl_sanpham, tbl_khachhang, tbl_donhang WHERE tbl_sanpham.id_sanpham = tbl_donhang.id_sanpham AND tbl_donhang.id_khachhang = tbl_khachhang.id_khachhang
    ORDER BY tbl_donhang.id_donhang DESC";
    $sql_select_query = mysqli_query($mysqli, $sql_select); 
?>

<?php
      if(isset($_GET['action']) == 'xoadonhang'){
          $mahang = $_GET['mahang'];
          $sql_delete_donhang = "DELETE FROM tbl_donhang WHERE mahang = '$mahang'";
          $sql_delete_query = mysqli_query($mysqli, $sql_delete_donhang);
          //header('Location:index.php?action=Quanlidonhang&query=Them');
      }
?>


<?php
    if(isset($_GET['action']) == 'donhang' && $_GET['query'] == 'xemdonhang'){
        $mathang = $_GET['mahang'];
        $sql_chitiet = "SELECT * FROM tbl_donhang, tbl_sanpham WHERE tbl_donhang.id_sanpham = tbl_sanpham.id_sanpham AND tbl_donhang.mahang  = '$mathang' LIMIT 1";
        $sql_chitiet_query = mysqli_query($mysqli, $sql_chitiet);
    }
?>

<div class="list-table">

    <table class = "styled-list-table"  >
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Ngày đặt</th>
                <th>Tình trạng</th>
                <th>Quản lý</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 0;
            while($row_order = mysqli_fetch_array($sql_select_query)){
                $i++
        ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row_order['mahang']?></td>
                <td><?php echo $row_order['firstname'].' '.$row_order['lastname']?></td>
                <td><?php echo $row_order['phone_number']?></td>
                <td><?php echo $row_order['email']?></td>
                <td><?php echo $row_order['ngaythang']?></td>
                <td>
                    <?php if($row_order['tinhtrang'] == 0){
                            echo 'Chưa xử lý';
                    }else{
                        echo 'Đã xử lý';
                    } ?>
                </td>
                <td>
                    <!--<a href="index.php?action=donhang&query=xemdonhang">Xem đơn hàng</a>-->
                    <a href = "?action=xoadonhang&mahang=<?php echo $row_order['mahang']?>"><i class="fas fa-times btn-delete-product"></i></a> 
                    <a href = "?action=donhang&query=xemdonhang&mahang=<?php echo $row_order['mahang']?>"><i class="fas fa-cog btn-change-prodcut"></i></a>
                </td>

            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>


</div>