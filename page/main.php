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
         case 'New':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/New.php");
            break;
         case 'All':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/All.php");
            break;
         case 'Sweats':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Sweats.php");
            break;
         case 'Tees':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Tees.php");
            break;
         case 'Bottoms':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Bottoms.php");
            break;
         case 'Headwear':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Headwear.php");
            break;
         case 'Accessories':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Accessories.php");
            break;
         case 'Outerwear':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Outerwear.php");
            break;
         case 'Tops':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Tops.php");
            break;
         case 'Womens':
         include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Womens.php");
            break;

         default:
            include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Home.php");
               break;
     }




     ?>
    </div>

  