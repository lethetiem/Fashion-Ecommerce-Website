 <?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY stt DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>


 <div class="list-table">
    <table class="styled-list-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Chỉnh sửa sản phẩm</th>
            </tr>
        </thead>

<?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
?>

        <tbody>
           <tr class="active-row">
                <td><?php echo $i ?></td>
                <td><?php echo $row['name']?></td>
                <td>
                    <a href = "Modules/Quanlidanhmucsp/Xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>"><i class="fas fa-times btn-delete-product"></i></a> 
                    <a href = "?action=Quanlidanhmucsanpham&query=Sua&iddanhmuc=<?php echo $row['id_danhmuc']?>"><i class="fas fa-cog btn-change-prodcut"></i></a>
                </td>
            </tr> 
                <!-- and so on... -->
        </tbody>
<?php
    }
?>
    </table>
</div>