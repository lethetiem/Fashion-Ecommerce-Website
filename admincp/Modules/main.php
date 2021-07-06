<div class="clear" ></div>
<?php
    if(isset($_GET['action']) && $_GET['query']){
        $mnn = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $mnn = " ";
        $query = " ";
    }
    if($mnn == 'Quanlidanhmucsanpham' && $query == 'Them'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlidanhmucsp/Them.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlidanhmucsp/Lietke.php");
    }elseif($mnn == 'Quanlidanhmucsanpham' && $query == 'Sua'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlidanhmucsp/Sua.php");
    }elseif($mnn == 'Quanlisanpham' && $query == 'Them'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlisp/Them.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlisp/Lietke.php");
    }elseif($mnn == 'Quanlisanpham' && $query == 'Sua'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlisp/Sua.php");
    }elseif($mnn == 'Quanlidonhang' && $query =='Them'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlidonhang/LietKeDH.php");
    }elseif($mnn == 'donhang' && $query =='xemdonhang'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlidonhang/xemdonhang.php");
    }elseif($mnn == 'Quanlikhachhang' && $query == 'Them'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Quanlikhachhang/Xuly.php");
    }
    else{
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Welcome.php");    
    }
   
    
?>