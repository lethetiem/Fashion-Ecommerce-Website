<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>


 <div class="list-table">
    <table class="styled-list-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Danh mục</th>
                <th>Giá sản phẩm</th>
                <th>Tóm tắt</th>
                <th>Tình trạng</th>
                <th>Quản lí sản phẩm</th>
            </tr>
        </thead>

<?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
?>

        <tbody>
           <tr class="active-row">
                <td><?php echo $i ?></td>
                <td><?php echo $row['masp']?></td>
                <td><?php echo $row['tensp']?></td>
                <td><img src="/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlisp/Uploads<?php echo $row['hinhanh']?>" width = "150px"></td>
                <td><?php echo $row['soluong']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['giasp']?></td>
                <td><?php echo $row['tomtat']?></td>
                <td><?php if($row['tinhtrang'] == 1){
                    echo "Kích hoạt";
                }
                    else{
                        echo "Ẩn";
                    }
                    ?></td>
                <td>
                    <a href = "Modules/Quanlisp/Xuly.php?idsanpham=<?php echo $row['id_sanpham']?>"><i class="fas fa-times btn-delete-product"></i></a> 
                    <a href = "?action=Quanlisanpham&query=Sua&idsanpham=<?php echo $row['id_sanpham']?>"><i class="fas fa-cog btn-change-prodcut"></i></a>
                </td>
            </tr> 
                <!-- and so on... -->
        </tbody>
<?php
    }
?>
    </table>
</div>
