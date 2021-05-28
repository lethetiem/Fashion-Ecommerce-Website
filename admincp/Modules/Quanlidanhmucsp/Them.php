
<div class="add-table">
    <table class="styled-table">
        <form method = "POST" action="Modules/Quanlidanhmucsp/Xuly.php">
            <thead>
                <tr>
                    <th>Tên danh mục</th>
                    <th>Thứ tự</th>
                </tr>
            </thead>
            <tbody>
                <tr  class="active-row">
                    <td>
                        <input class="product__name" type="text" name = "Tendanhmuc">
                    </td>
                    <td>
                        <input  class="product__value" type="text" name = "Thutu">
                    </td>
                </tr>
                <tr class="submit__container">
                   <td >
                       <input type="submit" class="btn-add-product" name = "themdanhmuc" value = "Thêm">
                   </td>
                   <td>
                    </td>
                </tr>
                <!-- and so on... -->
            </tbody>
        </form>
    </table>
</div>
