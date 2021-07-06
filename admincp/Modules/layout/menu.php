<?php
 
  // if(isset($_GET['Dangxuat']) && $_GET['Dangxuat'] == 1){
  //   unset($_SESSION['login']);
  //   header('Location:login.php');
  // }

?>


<!-- <ul class = "admincp_list">
    <li><a  href = "index.php?action=Quanlidanhmucsanpham&query=Them" >Qua li danh muc san pham </a></li>
    <li><a  href = "index.php?action=Quanlisanpham&query=Them" >Quan li san pham</a></li>
    <li><a  href = "index.php?action=Quanlibaivier&query=Them" >Quan li bai viet</a></li>
    <li><a  href = "index.php?action=Quanlidanhmucbaiviet&query=Them" >Quan li danh muc bai viet</a></li>
</ul> -->
<aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <h2>HEARTUALL</h2>
      <!-- <li>
        <a href="index.html">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li> -->
      <li class="sub-menu">
        <a href="javascript:void(0);" >
          <i class="fas fa-table"></i>
          <div class="title_navbar">
            <span>Sản Phẩm</span>
          </div>
          <i class="fas fa-angle-down"></i> 
        </a>
        <ul>
          <li>
            <a href="index.php?action=Quanlidanhmucsanpham&query=Them">Quản lý danh mục sản phẩm</a>
          </li>
          <li>
            <a href="index.php?action=Quanlisanpham&query=Them">Quản lý sản phẩm</a>
          </li>
        </ul>
      </li>
      
      <li class="sub-menu">
        <a href="javascript:void(0);" >
          <i class="fas fa-book-open"></i>
          <div class="title_navbar">
            <span>Bài viết</span>
          </div>
          <i class="fas fa-angle-down"></i> 
        </a>
        <ul>
          <li>
            <a href="index.php?action=Quanlidonhang&query=Them">Quản lý đơn hàng</a>
          </li>
          <li>
            <a href="index.php?action=Quanlikhachhang&query=Them">Quản lý khách hàng</a>
          </li>
        </ul>
      </li>

      <li class="sub-menu">
        <!-- <a href="index.php?Dangxuat=1" >Log Out: <?php if(isset($_SESSION['loggin'])){echo $_SESSION['login'];}?></a> -->
        <a href="logout.php">Log out</a>
      </li>
      
      
      
      
    </ul>
  </div>
</aside>
<div class="header">
  <div class="search-box">
    <i class="fas fa-search btn-search"></i>
    <input type="text" class="value__search" name="search" placeholder="Search..">
  </div>
</div>