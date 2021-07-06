 <div class="section-main">
   <?php

     if(isset($_GET['manager'])){
       $mnn = $_GET['manager'];
     }else{
        $mnn = "";
     }

     switch($mnn){
         case 'Features':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Features.php");
            break;
         case 'Bag':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Bag.php");
            break;
         case 'Account':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Account.php");
            break;
         case 'Register':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Register.php");
            break;
         case 'All':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/All.php");
            break;
         case 'ProductCategory':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/ProductCategory.php");
            break;
         case 'Details':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Details.php");
            break;
         case 'SearchProduct':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/SearchProduct.php");
            break;
         case 'AccountDashBoard':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/AccountDashBoard.php");
            break;
         case 'Payment':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Payment.php");
            break;
         case 'logout':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/logout.php");
             break;
         case 'PaymentDetails':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/PaymentDetails.php");
            break;
         default:
            include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Home.php");
               break;
     }


     ?>
    </div>

  