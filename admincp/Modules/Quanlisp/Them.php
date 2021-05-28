<p>Them danh muc san pham</p>
<table border = "1" width = "100%" style="border-collapse: collapse;">
<form method="POST" action = "Modules/Quanlisp/Xuly.php">
    <tr>
        <td>Tên sản phẩm </td>
        <td><input type = "text" name="Tendanhmuc"></td>
    </tr>

    <tr>
        <td>Mã sản phẩm</td>
        <td><input type = "text" name = "Masanpham"></td>
    </tr>

    <tr>
        <td>Gía sản phẩm</td>
        <td><input type= "text" name = "Giasanpham"></td>
    </tr>

    <tr>
        <td>Số lượng</td>
        <td><input type= "text" name = "Soluong"></td>
    </tr>

    <tr>
        <td>Nội dung</td>
        <td><textarea rows = "5" name = "Noidung" style ="resize: none"></textarea></td>
    </tr>

    <tr>
        <td>Tóm tắt</td>
        <td><textarea rows = "5" name = "Noidung" style = "resize: none"></textarea></td>

    <tr>
        <td>Hình ảnh</td>
        <td><input type = "file" name ="Soluong"></td>
    </tr>

    <tr>
        <td>Tình trạng</td>
        <td>
            <select>
                <option>Kích hoạt</option>
                <option>Ẩn</option>
            </select>
        </td>
    </tr>

<tr>
    <td colspan = "2"><input type = "submit" name = "themsanpham" value = "Thêm sản phẩm"></td>
</tr>

</form>
</table>