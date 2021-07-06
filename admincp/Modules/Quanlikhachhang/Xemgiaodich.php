<?php
if(isset($_GET['khachhang'])){
    $magiaodich = $_GET['khachhang'];
}else{
    $magiaodich = " ";
}
$sql_select = "SELECT * FROM tbl_giaodich, tbl_khachhang, tbl_sanpham WHERE tbl_khachhang.id_khachhang = tbl_giaodich.id_khachhang
    AND tbl_giaodich.id_sanpham = tbl_sanpham.id_sanpham AND tbl_giaodich.magiaodich = '$magiaodich'  
     ORDER BY tbl_giaodich.id_giaodich DESC";
$sql_select_query = mysqli_query($mysqli, $sql_select)
?>

<div class="list-table">

    <table class = "styled-list-table"  >
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Tên sản phẩm</th>
                <th>Ngày đặt</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 0;
            while($row_giaodich = mysqli_fetch_array($sql_select_query)){
                $i++
        ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row_giaodich['magiaodich']?></td>
                <td><?php echo $row_giaodich['tensp']?></td>
                <td><?php echo $row_giaodich['ngaythang']?></td>    
            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>


</div>