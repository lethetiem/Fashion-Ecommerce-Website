<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SaleOnlineWebDeveloper/css/admincp.css">
    <title>Admincp</title>
</head>
<body>
    <h3 class = "title_admincp">WELCOME TO ADMINCP </h3>
    <div class="wrapper">
    <?php
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/config/config.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/header.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/menu.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/main.php");
        include("/xampp/htdocs/SaleOnlineWebDeveloper/admincp/Modules/footer.php");
    ?>
     </div>
</body>
</html>