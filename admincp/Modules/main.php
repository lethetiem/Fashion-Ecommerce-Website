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
    }
    else{
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/Welcome.php");    
    }
?>