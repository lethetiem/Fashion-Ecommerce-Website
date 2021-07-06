<?php
session_start(); //to ensure you are using same session
unset($_SESSION['current_login']);
session_destroy(); //destroy the session
header('Location:/SaleOnlineWebDeveloper/page/index.php'); //to redirect back to "index.php" after logging out
exit();
?>