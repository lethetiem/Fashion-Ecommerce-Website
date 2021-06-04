<?php
    include("../../config/config.php");
    $tensp = $_POST['Tensanpham'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];
     //xu li hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $tomtat = $_POST['tomtat'];
    $noidung  = $_POST['Noidung'];
    $tinhtrang = $_POST['tinhtrang'];
    $id_danhmuc = $_POST['danhmuc'];


    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_sanpham(tensp, masp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) VALUE('".$tensp."','".$masp."','".$giasp."', '".$soluong."', '".$hinhanh."', '".$tomtat."', '".$noidung."', '".$tinhtrang."', '".$id_danhmuc."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp,'Uploads/'.$hinhanh);
        header('Location:../../index.php?action=Quanlisanpham&query=Them'); 
    }elseif(isset($_POST['Suadanhmuc'])){
        if($hinhanh!=''){
            move_uploaded_file($hinhanh_tmp,'Uploads/'.$hinhanh);
            $sql = "SELECT * FROM tbl_sanpham WHERE id = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('admincp/Modules/Quanlisp/Uploads/'.$row['hinhanh']);
             }
            $sql_update = "UPDATE tbl_sanpham SET tensp = '".$tensp."', masp = '".$masp."', giasp = '".$giasp."', soluong = '".$soluong."', hinhanh = '".$hinhanh."', tomtat = '".$tomtat."', noidung = '".$noidung."',tinhtrang = '".$tinhtrang."' WHERE id = '$_GET[idsanpham]' ";
            }else{
            $sql_update = "UPDATE tbl_sanpham SET tensp = '".$tensp."', masp = '".$masp."', giasp = '".$giasp."', soluong = '".$soluong."', hinhanh = '".$hinhanh."', tomtat = '".$tomtat."', noidung = '".$noidung."',tinhtrang = '".$tinhtrang."' WHERE id = '$_GET[idsanpham]' ";
            }
        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=Quanlisanpham&query=Them');
    }else{
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_array($query)){
            unlink('admincp/Modules/Quanlisp/Uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id = '".$id."' ";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=Quanlisanpham&query=Them');
    }
?>