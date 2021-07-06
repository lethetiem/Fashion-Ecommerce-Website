<?php
 include("../../config/config.php");
if(isset($_GET['action']) == 'xoadonhang'){
    $mahang = $_GET['mahang'];
    $sql_delete_order = "DELETE FROM tbl_donhang WHERE mahang = '$mahang'";
    $sql_delete_query = mysqli_query($mysqli, $sql_delete_order);
    header("Location:../../index.php?action=Quanlidonhang&query=Them");
}
?>