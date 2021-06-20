<?php
    session_start();

    include('/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php');
    //them so luong 
    //tru so luong
    //xoa san pham
    //them san pham vao gio hang
    if(isset($_POST['themgiohang'])){
        //session_destroy();
        $id  = $_GET['idsanpham'];
        $soluong=1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(array('id'=>$id, 'masp'=>$row['masp'], 'tensp'=>$row['tensp'], 'soluong'=>$soluong, 'giasp'=>$row['giasp'], 'hinhanh'=>$row['hinhanh'] ));
            //kiem tra session gio hang ton tai
            if(isset($_SESSION['cart'])){ 
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    //neu du lieu trung
                    if($cart_item['id'] == $id){
                        $product[] = array('id'=>$cart_item['id'], 'masp'=>$cart_item['masp'], 'tensp'=>$cart_item['tensp'], 'soluong'=>$soluong+1, 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh']);
                        $found = true;
                    }else{
                        //neu du lieu khong trung
                        $product[] = array('id'=>$cart_item['id'], 'masp'=>$cart_item['masp'], 'tensp'=>$cart_item['tensp'], 'soluong'=>$soluong, 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh']);
                    } 
                }
            if($found == false){
                //lien ket du lieu 
                $_SESSION['cart'] = array_merge($product, $new_product);
            }else{
                $_SESSION['cart'] = $product;
            }

        }else{
            $_SESSION['cart'] = $new_product;
        }
    }

   header('Location:/SaleOnlineWebDeveloper/page/index.php?manager=Bag');
    
}

?>
