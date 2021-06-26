<?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
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
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=New" class="nav__mega-child-link">New</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=All" class="nav__mega-child-link">All</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Sweats" class="nav__mega-child-link">Sweats</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Tees" class="nav__mega-child-link">Tees</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Bottoms" class="nav__mega-child-link">Bottoms</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Headwear" class="nav__mega-child-link">Headwear</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Accessories" class="nav__mega-child-link">Accessories</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Outerwear" class="nav__mega-child-link">Outerwear</a>
                    </li>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Tops" class="nav__mega-child-link">Tops</a>
                    </li>
                  <!-- <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Womens" class="nav__mega-child-link">Womens</a>
                    </li> -->
                    <?php
                          while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <li class="nav__mega-child">
                      <a href="/SaleOnlineWebDeveloper/page/index.php?manager=Womens&id=<?php echo $row_danhmuc['id_danhmuc'] ?>" class="nav__mega-child-link"><?php echo $row_danhmuc['name'] ?></a>
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
              <input type="text" class="search__input" placeholder="SEARCH" name="text__keyword" />
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
  