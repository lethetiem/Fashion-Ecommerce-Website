<?php
    $sql_Sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id = '$_GET[iddanhmuc]' LIMIT 1";
    $query_Sua_danhmucsp = mysqli_query($mysqli, $sql_Sua_danhmucsp);
?>

<p>Sua danh muc san pham</p>
<table border = "1" width = "50%" style="border-collapse: collapse;">
<form method="POST" action = "Modules/Quanlidanhmucsp/Xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
<?php
while($dong = mysqli_fetch_array($query_Sua_danhmucsp)){

?>
    <tr>
        <td>Ten danh muc </td>
        <td><input type = "text" value = "<?php echo $dong ['name'] ?>" name="Tendanhmuc"></td>
</tr>
<tr>
    <td>Thu tu </td>
    <td><input type = "text" value = "<?php echo $dong ['stt'] ?>" name = "Thutu"></td>
</tr>
<tr>
    <td colspan = "2"><input type = "submit" name = "suadanhmuc" value = "Sua danh muc san pham"></td>
</tr>

<?php
}
?>
</form>
</table>