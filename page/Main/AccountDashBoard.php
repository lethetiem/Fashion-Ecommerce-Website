<p> Account DashBoard </p>
<?php
    if(isset($_SESSION['Login'])){
        echo $_SESSION['Login'];
    }elseif(isset($_GET['logout'])){
        $id = $_GET['logout'];
        if($id == 1){
            unset($_SESSION['Login']);
        }
        header('Location:index.php');
    }
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div align = "center">
  <a href="?logout=1"> LOG OUT </a>
</div>




