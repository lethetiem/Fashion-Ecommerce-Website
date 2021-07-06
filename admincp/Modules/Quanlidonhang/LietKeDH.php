<?php
    $sql_select = "SELECT * FROM tbl_khachhang, tbl_donhang WHERE tbl_donhang.id_khachhang = tbl_khachhang.id_khachhang
    GROUP BY tbl_khachhang.id_khachhang";
    $sql_select_query = mysqli_query($mysqli, $sql_select); 
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
                    <a href = "index.php?action=donhang&query=xemdonhang&mahang=<?php echo $row_order['mahang']?>"><i class="fas fa-search"></i></a>
                </td>
                <!--<i class="fas fa-cog btn-change-prodcut"></i>-->

            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>


</div>