<?php
    $sql_select_khachhang = "SELECT * FROM tbl_khachhang, tbl_giaodich WHERE tbl_khachhang.id_khachhang = tbl_giaodich.id_khachhang GROUP BY tbl_giaodich.magiaodich ORDER BY tbl_khachhang.id_khachhang DESC";
    $sql_select_query = mysqli_query($mysqli, $sql_select_khachhang); 
?>


<div class="list-table">

    <table class = "styled-list-table"  >
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Ngày đặt</th>
                <th>Quản lý</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 0;
            while($row_khachhang = mysqli_fetch_array($sql_select_query)){
                $i++
        ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row_khachhang['firstname'].' '.$row_khachhang['lastname']?></td>
                <td><?php echo $row_khachhang['phone_number']?></td>
                <td><?php echo $row_khachhang['email']?></td>
                <td><?php echo $row_khachhang['ngaythang']?></td>
                <td>
                    <a href = "index.php?action=giaodich&query=xemgiaodich&khachhang=<?php echo $row_khachhang['magiaodich']?>"><!--<i class="fas fa-cog btn-change-prodcut"></i>-->Xem giao dịch</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>


</div>

