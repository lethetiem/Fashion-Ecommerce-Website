 <div class="section-main">
     <?php
     if(isset($_GET['manager'])){
       $mnn = $_GET['manager'];
     }else{
        $mnn = "";
     }
     if($mnn == 'Features'){
       include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Features.php");
     }elseif($mnn == 'Bag'){
       include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Bag.php");
     }elseif($mnn == 'Account'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Account.php");
     }elseif($mnn == 'Register'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Register.php");
     }elseif($mnn == 'New'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/New.php");
     }elseif($mnn == 'All'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/All.php");
     }elseif($mnn == 'Sweats'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Sweats.php");
     }elseif($mnn == 'Tees'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Tees.php");
     }elseif($mnn == 'Bottoms'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Bottoms.php");
     }elseif($mnn == 'Headwear'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Headwear.php");
     }elseif($mnn == 'Accessories'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Accessories.php");
     }elseif($mnn == 'Outerwear'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Outerwear.php");
     }elseif($mnn == 'Tops'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Tops.php");
     }elseif($mnn == 'Womens'){
        include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Womens.php");
     }
     else{
       include("/xampp/htdocs/SaleOnlineWebDeveloper/page/Main/Home.php");
     }
     ?>
    </div>

  