<?php
  ob_start();
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

        if(isset($_GET['logout'])){
          $id = $_GET['logout'];
          if($id == 1){
              unset($_SESSION['Login']);
          }
          header('Location:index.php');
      }
?> 
 
 <div class="section-header">
      <div class="header__container">
        <header class="header">
          <div class="header__logo-container">
            <a href="index.php" class="header__logo">
              <img src="/SaleOnlineWebDeveloper/images/03-voov.jpg" alt="" class="header__logo-img" />
            </a>
          </div>
          <nav class="header__nav">
            <div class="nav__menu">
              <a href="/SaleOnlineWebDeveloper/page/index.php?manager=All" class="nav__menu-parrent">Shop</a>
              <div class="nav__mega-container">
                <div class="nav__mega">
                  <ul class="nav__mega-children">
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=All" class="nav__mega-child-link">All</a>
                    </li>
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=ProductCategory&id=<?php echo $row_danhmuc['id_danhmuc'] ?>" class="nav__mega-child-link"><?php echo $row_danhmuc['name'] ?></a>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="nav__search">
              <button class="nav__search-btn">Search</button>
            </div>
            <?php
            if(isset($_SESSION['current_login'])){
            ?>
            <a href="/SaleOnlineWebDeveloper/page/index.php?manager=ViewOrder" class = "nav__item-right">View Orders</a>
            <?php
            }
            ?>
            <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Features" class="nav__item-right">Features</a>
            <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Account&id=1" class="nav__item-right">Account</a> 
            <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Bag" class="nav__item-right">Bag</a>
            <div class="header__flag-container">
              <img
                src="http://gepi.global-e.com/content/images/flags/vn.png"
                alt="flag"
                class="header__flag"
              />
            </div>
          </nav>
        </header>
        <div class="header__search">
          <div class="header__search-container">
            <form action="/SaleOnlineWebDeveloper/page/index.php?manager=SearchProduct" method="POST" class="header__search-form">
              <input type="text" class="search__input" placeholder="SEARCH" name="text__keyword" autocomplete ="off" />
              <button class="header__search-btn header__search-submit" name="Search__product__keyword" type="submit">
                <i class="fas fa-search btn__small"></i>
              </button>
              <button class="header__search-btn header__search-close">
                <i class="fas fa-times btn__small btn__small-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.search__input').keyup(function(){
        var txt = $('.search__input').val();
        $_POST('ajax.php', {data:txt}, function(data){
          
        })
      })
    })
    </script>
  