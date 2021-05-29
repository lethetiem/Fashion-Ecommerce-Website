<?php
    $sql_Sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id = '$_GET[iddanhmuc]' LIMIT 1";
    $query_Sua_danhmucsp = mysqli_query($mysqli, $sql_Sua_danhmucsp);
?>



<div class="change-table">
    <table class="styled-change-table">
        <form method = "POST" action="Modules/Quanlidanhmucsp/Xyly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">

            <?php
                while($dong = mysqli_fetch_array($query_Sua_danhmucsp)){
            ?>

            <thead>
                <tr>
                    <th>Tên danh mục</th>
                    <th>Thứ tự</th>
                </tr>
            </thead>
            <tbody>
                <tr  class="active-row">
                    <td>
                        <input class="product__name" type="text" value = "<?php echo $dong ['name'] ?>" name = "Tendanhmuc">
                    </td>
                    <td>
                        <input  class="product__value" type="text" value = "<?php echo $dong['stt'] ?>" name = "Thutu">
                    </td>
                </tr>
                <tr class="submit__container">
                   <td >
                       <input type="submit" class="btn-change-product" name = "suadanhmuc" value = "Sữa">
                   </td>
                   <td >
                       
                   </td>
                </tr>
                
                <!-- and so on... -->
            </tbody>

            <?php
                }
            ?>

        </form>
    </table>
</div>
