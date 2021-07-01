
<div class = "title2">ACCOUNT DASHBOARD</div>
<div class = "container-table">
    <div class = "row">
        <div class = "colum">
            <div class = "title3">
                <p>ACCOUNT OVERVIEW</p>
                <div class = "username">
                <?php
                if(isset($_SESSION['Login'])){
                echo $_SESSION['Login'];
                                        
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
    <a href="?logout=1"><button class = "log-out">LOG OUT</button>  </a>
  
 </div>


  


<?php
    if(isset($_SESSION['Login'])){
        // echo $_SESSION['Login'];
    }elseif(isset($_GET['logout'])){
        $id = $_GET['logout'];
        if($id == 1){
            unset($_SESSION['Login']);
        }
        header('Location:index.php');
    }
?>



<!-- 
<div class= "log-out">
  <a href="?logout=1"> LOG OUT </a>
</div> -->




