<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SaleOnlineWebDeveloper/admincp/css/admincp.css">
    <link rel="stylesheet" href="/SaleOnlineWebDeveloper/admincp/css/menu-admin.css">
    <link rel="stylesheet" href="/SaleOnlineWebDeveloper/admincp/css/add-table.css">
    <link rel="stylesheet" href="/SaleOnlineWebDeveloper/admincp/css/list-table.css">
    <link rel="stylesheet" href="/SaleOnlineWebDeveloper/admincp/css/change-table.css">
    <!-- icon -->
    <link rel="stylesheet" href="./FontAwesome/css/all.min.css" />
    <link rel="stylesheet" href="/SaleOnlineWebDeveloper/FontAwesome/css/all.min.css" />
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Admincp</title>
</head>
<body>
    
    <?php
        
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php");
       // include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/layout/header.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/layout/menu.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/main.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/layout/footer.php");
    ?>
    
    <!-- Jquery cho page nav -->
    <script>
        $("#leftside-navigation .sub-menu > a").click(function(e) {
  $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
  e.stopPropagation()
})
    </script>
</body>
</html>