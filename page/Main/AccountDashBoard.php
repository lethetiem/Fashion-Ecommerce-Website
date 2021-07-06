<?php
  $user= $_SESSION['current_user'];

?>
<div class = "title2">ACCOUNT DASHBOARD</div>
<div class = "container-table">
    <div class = "row">
        <div class = "colum">
            <div class = "title3">
                <p>ACCOUNT OVERVIEW</p>
                <div class = "username">
                <?php
                if(isset($user['username'])){
                echo $user['username'];
                                        
                }
                ?>
                </div>
            </div>
        </div>
        <div class = "colum">
            <div class = "title3">
                <div class = "recent">
                <p>RECENT ORDER</p>
                
                <div class = "history">
                <p >You have not placed any orders yet.</p>   
                </div>
                </div>
            </div> 
        </div>
    </div>
    <div class = row>
        <div class = "title4">
            <p>DEFAULT ADDRESS</p>
            <br>
            <a href="#" class="edit-address">EDIT ADDRESS</a>
        </div>
    </div>   
</div>
<div >
    <a href="/SaleOnlineWebDeveloper/page/Main/logout.php" class = "log-out">LOG OUT  </a>
  
 </div>


  


 <?php
//     if(isset($_SESSION['current_user'])){
//          //echo $_SESSION['Login'];
//    }elseif(isset($_GET['logout'])){
//         $id = $_GET['logout'];
//         if($id == 1){
//             //session_unset();
//             unset($_SESSION['current_user']);
//         }
//             header('Location:index.php');
        
        
//     }
?> 



<!-- 
<div class= "log-out">
  <a href="?logout=1"> LOG OUT </a>
</div> -->




