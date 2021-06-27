<?php
  if(isset($_GET['action']) == 'Dangxuat'){
    unset($_SESSION['login__']);
    header('Location:login.php');
  }

  
?>
<li class="sub-menu">
          <a href="index.php?Dangxuat=1">Log Out: <?php if(isset($_SESSION['login'])){echo $_SESSION['login'];}?></a>
      </li>