<?php
    include("../../config/config.php");
    $name = $_POST['Tendanhmuc'];
    $stt = $_POST['Thutu'];
    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_danhmuc(name, stt) VALUE('".$name."','".$stt."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=Quanlidanhmucsanpham&query=Them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE tbl_danhmuc SET name = '".$name."', stt = '".$stt."' WHERE id = '$_GET[iddanhmuc]' ";
        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=Quanlidanhmucsanpham&query=Them');
    }else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id = '".$id."' ";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=Quanlidanhmucsanpham&query=Them');
    }
?>