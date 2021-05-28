<!-- <?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY stt DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<p>Liet ke danh muc san pham</p>
<table style="width:100%" border = "1" style="border-collapse: collapse;">
<tr>
    <th>ID </th>
    <th>Ten danh muc</th>
    <th>Quan li danh muc</th>
</tr>


<?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
?>

<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['name']?></td>
    <td>
        <a href = "Modules/Quanlidanhmucsp/Xuly.php?iddanhmuc=<?php echo $row['id']?>"> Xoa </a> 
        <a href = "?action=Quanlidanhmucsanpham&query=Sua&iddanhmuc=<?php echo $row['id'] ?>" >Sua</a>
    </td>
</tr>

<?php
    }
?>
 -->
 <div class="list-table">
    <table class="styled-list-table">
        <thead>
            <tr>
                <th>Tên danh mục</th>
                <th>Id</th>
                <th>Chỉnh sửa sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <tr class="active-row">
                <td>Stusy Tshirt</td>
                <td>1</td>
                <td>
                    <a href="#"><i class="fas fa-times btn-delete-product"></i></a>
                    <a href="/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlidanhmucsp/Sua.php"><i class="fas fa-cog btn-change-product"></i></i></a>
                </td>
            </tr>
            <tr class="active-row">
                <td>Stusy Tshirt</td>
                <td>1</td>
                <td>
                    <a href="#"><i class="fas fa-times btn-delete-product"></i></a>
                    <a href="#"><i class="fas fa-cog btn-change-product"></i></i></a>
                </td>
            </tr>
            <tr class="active-row">
                <td>Stusy Tshirt</td>
                <td>1</td>
                <td>
                    <a href="#"><i class="fas fa-times btn-delete-product"></i></a>
                    <a href="#"><i class="fas fa-cog btn-change-product"></i></i></a>
                </td>
            </tr>
            <tr class="active-row">
                <td>Stusy Tshirt</td>
                <td>1</td>
                <td>
                    <a href="#"><i class="fas fa-times btn-delete-product"></i></a>
                    <a href="#"><i class="fas fa-cog btn-change-product"></i></i></a>
                </td>
            </tr>
            
            
                <!-- and so on... -->
        </tbody>
    </table>
</div>