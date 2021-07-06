<?php
    $sql_select_khachhang = "SELECT * FROM tbl_khachhang, tbl_giaodich WHERE tbl_khachhang.id_khachhang = tbl_giaodich.id_khachhang ORDER BY tbl_khachhang.id_khachhang DESC";
    $sql_select_query = mysqli_query($mysqli, $sql_select_khachhang); 
?>

<?php
if(isset($_GET['action']) == 'giaodich' && $_GET['query'] == 'xemgiaodich'){
    $magiaodich = $_GET['khachhang'];
}else{
    $magiaodich = " ";
}
$sql_select = "SELECT * FROM tbl_giaodich, tbl_khachhang, tbl_sanpham WHERE tbl_khachhang.id_khachhang = tbl_giaodich.id_khachhang
    AND tbl_giaodich.id_sanpham = tbl_sanpham.id_sanpham AND tbl_giaodich.magiaodich = '$magiaodich' GROUP BY tbl_giaodich.magiaodich
     ORDER BY tbl_giaodich.id_giaodich DESC";
$sql_select_query = mysqli_query($mysqli, $sql_select);
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
                    <a href = "?action=giaodich&query=xemgiaodich&khachhang=<?php echo $row_khachhang['magiaodich']?>"><!--<i class="fas fa-cog btn-change-prodcut"></i>-->Xem giao dịch</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>


</div>

