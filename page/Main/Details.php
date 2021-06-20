
<?php
        $sql_chitiet = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
        $query_chitiet = mysqli_query($mysqli, $sql_chitiet);

        while($row_chitiet = mysqli_fetch_array($query_chitiet)){
      
?> 



<div class="section-details">
      <div class="section-product">
        <div class="product__images-wrap">
          <div class="product__images">
            <div class="product__list">
              <div class="product__media">
                <a class="product__image-zoom-trigger">
                  <div class="product-box">
                    <img
                      src="../admincp/Modules/Quanlisp/Uploads/<?php echo $row_chitiet['hinhanh'] ?>"
                      alt=""
                      class="product_image-main"
                    />
                  </div>
                </a>
              </div>
              <div class="product__media">
                <a class="product__image-zoom-trigger">
                  <div class="product-box">
                    <img
                      src="../admincp/Modules/Quanlisp/Uploads/<?php echo $row_chitiet['hinhanh'] ?>"
                      alt=""
                      class="product_image-main"
                    />
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>



        <div class="product-information">
          <h1 class="product__title"><?php echo $row_chitiet['tensp']?></h1>
          <span class="product__price"><?php echo number_format($row_chitiet['giasp']).' VND'?></span>



          <form method = "POST" action="Main/Addbag.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>"  class="product__form">
            <div class="switch__color">
              <div class="switch__color-box black" data-color="black">
                <input
                  type="radio"
                  value="black"
                  class="switch__color-input"
                  name="radio"
                  id="swatch-0-black"
                />
                <label
                  for="swatch-0-black"
                  class="switch__color-img"
                  style="
                    background-color: black;
                    background-image: url(//cdn.shopify.com/s/files/1/0087/6193/3920/products/1904694_BLAC_1_015c9e7c-5f1c-4fa6-8ecb-2a445ff18668_100x@2x.jpg?v=1623268400);
                  "
                >
                </label>
              </div>
              <div class="switch__color-box khaki" data-value="khaki">
                <input
                  id="swatch-0-khaki"
                  type="radio"
                  value="khaki"
                  class="switch__color-input"
                  name="radio"
                />
                <label
                  for="swatch-0-khaki"
                  class="switch__color-img"
                  style="
                    background-color: khaki;
                    background-image: url(//cdn.shopify.com/s/files/1/0087/6193/3920/products/1904694_KHAK_1_3b2994c1-a418-45b8-b1d0-30434bb2f341_100x@2x.jpg?v=1623268400);
                  "
                ></label>
              </div>
              <div class="switch__color-box white" data-value="white">
                <input
                  type="radio"
                  value="white"
                  class="switch__color-input"
                  name="radio"
                  id="swatch-0-white"
                />
                <label
                  for="swatch-0-white"
                  class="switch__color-img"
                  style="
                    background-color: white;
                    background-image: url(//cdn.shopify.com/s/files/1/0087/6193/3920/products/1904694_WHIT_1_59929deb-fbd3-4ae6-ad5f-99e91b62cc12_100x@2x.jpg?v=1623268400);
                  "
                ></label>
              </div>
              <div class="switch__color-box green" data-value="green">
                <input
                  id="swatch-0-green"
                  type="radio"
                  value="green"
                  class="switch__color-input"
                  name="radio"
                />
                <label
                  for="swatch-0-green"
                  class="switch__color-img"
                  style="
                    background-color: green;
                    background-image: url(//cdn.shopify.com/s/files/1/0087/6193/3920/products/1904694_GREN_1_6aa2b548-3525-4651-bc75-83cb5f7dd117_100x@2x.jpg?v=1623268400);
                  "
                ></label>
              </div>
              <div class="switch__color-box red" data-value="red">
                <input
                  id="swatch-0-red"
                  type="radio"
                  value="red"
                  class="switch__color-input"
                  name="radio"
                />
                <label
                  for="swatch-0-red"
                  class="switch__color-img"
                  style="
                    background-color: red;
                    background-image: url(//cdn.shopify.com/s/files/1/0087/6193/3920/products/1904694_REDD_1_bfa61351-9f4c-4b04-84a8-0bd1842c094f_100x@2x.jpg?v=1623268401);
                  "
                ></label>
              </div>
            </div>
            <div class="switch__size">
              <div class="switch__size-box xs" data-value="xs">
                <input
                  type="radio"
                  value="XS"
                  id="swatch-1-xs"
                  name="radio"
                  class="switch__size-input"
                />
                <label for="swatch-1-xs" class="switch__size-label">XS</label>
              </div>
              <div class="switch__size-box s" data-value="s">
                <input
                  type="radio"
                  value="S"
                  id="swatch-1-s"
                  name="radio"
                  class="switch__size-input"
                />
                <label for="swatch-1-s" class="switch__size-label">S</label>
              </div>
              <div class="switch__size-box m" data-value="m">
                <input
                  type="radio"
                  value="M"
                  name="radio"
                  class="switch__size-input"
                  id="swatch-1-m"
                />
                <label for="swatch-1-m" class="switch__size-label">M</label>
              </div>
              <div class="switch__size-box l" data-value="l">
                <input
                  type="radio"
                  value="L"
                  name="radio"
                  class="switch__size-input"
                  id="swatch-1-l"
                />
                <label for="swatch-1-l" class="switch__size-label">L</label>
              </div>
              <div class="switch__size-box xl" data-value="xl">
                <input
                  type="radio"
                  value="XL"
                  name="radio"
                  class="switch__size-input"
                  id="swatch-1-xl"
                />
                <label for="swatch-1-xl" class="switch__size-label">XL</label>
              </div>
            </div>
            <button class="product__act" name = "themgiohang" type ="submit">
              <span>Add to Bag</span> 
            </button>
          </form>



      <?php
        }
      ?>



          <div class="product__details">
            <p class="product__details-text">Short Sleeve T-Shirt</p>
            <p class="product__details-text">Graphic Art</p>
            <p class="product__details-text">100% Cotton</p>
            <p class="product__details-text">Imported</p>
            <br />
            <div class="accordion">
              <div class="accordion-wrap">
                <button class="product__details-fit-trigger">
                  "Fit Details"
                </button>
                <div class="product__details-fit unlock">
                  <strong>
                    "SS T-SHIRTS: "
                    <br />
                  </strong>
                  <span
                    >Measurements are in inches, unless otherwise noted.</span
                  >
                  <br />
                  "(Measure1" below armpit straight across)"
                  <br />
                  <div class="product__table-wrapper">
                    <table border="0" class="table table-condensed">
                      <tbody>
                        <tr>
                          <td>Size:</td>
                          <td>XS</td>
                          <td>S</td>
                          <td>M</td>
                          <td>L</td>
                          <td>XL</td>
                          <td>XXL</td>
                        </tr>
                        <tr>
                          <td>Chest:</td>
                          <td>18</td>
                          <td>19</td>
                          <td>21</td>
                          <td>23</td>
                          <td>25</td>
                          <td>27</td>
                        </tr>
                        <tr>
                          <td>Length:</td>
                          <td>27.5</td>
                          <td>28.5</td>
                          <td>229.5</td>
                          <td>30.5</td>
                          <td>31.5</td>
                          <td>32.5</td>
                        </tr>
                        <tr>
                          <td>Sleeve:</td>
                          <td>8</td>
                          <td>8.5</td>
                          <td>9</td>
                          <td>9.5</td>
                          <td>10</td>
                          <td>10</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-related-products">
        <header class="related__product-header">
          <h1 class="related__product-title">SUGGESTED</h1>
        </header>
        <ul class="related__products">
          <li class="related__product">
            <div class="product__card">
              <div class="product__card-variants">
                <div class="slick-list">
                  <div class="slick-track">
                    <a href="" class="product__card-variant">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_300x300@2x.jpg?v=1623705541""
                      alt="" />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
              </div>
              <ul class="product__card-thumbs">
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                    src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_40x40@2x.jpg?v=1623705541""
                    alt="" />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_PYEL_1_794389e2-81fa-4d56-9472-0e46a4ec89aa_40x40@2x.jpg?v=1623268371"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_KHAK_1_213fbd3a-c7a0-421a-acd4-90ca74f8b899_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
              </ul>
              <a href="" class="product__card-title">Sound Of Summer Tee</a>
            </div>
          </li>
          <li class="related__product">
            <div class="product__card">
              <div class="product__card-variants">
                <div class="slick-list">
                  <div class="slick-track">
                    <a href="" class="product__card-variant">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_300x300@2x.jpg?v=1623705541""
                      alt="" />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
              </div>
              <ul class="product__card-thumbs">
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                    src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_40x40@2x.jpg?v=1623705541""
                    alt="" />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_PYEL_1_794389e2-81fa-4d56-9472-0e46a4ec89aa_40x40@2x.jpg?v=1623268371"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_KHAK_1_213fbd3a-c7a0-421a-acd4-90ca74f8b899_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
              </ul>
              <a href="" class="product__card-title">Sound Of Summer Tee</a>
            </div>
          </li>
          <li class="related__product">
            <div class="product__card">
              <div class="product__card-variants">
                <div class="slick-list">
                  <div class="slick-track">
                    <a href="" class="product__card-variant">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_300x300@2x.jpg?v=1623705541""
                      alt="" />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
              </div>
              <ul class="product__card-thumbs">
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                    src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_40x40@2x.jpg?v=1623705541""
                    alt="" />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_PYEL_1_794389e2-81fa-4d56-9472-0e46a4ec89aa_40x40@2x.jpg?v=1623268371"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_KHAK_1_213fbd3a-c7a0-421a-acd4-90ca74f8b899_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
              </ul>
              <a href="" class="product__card-title">Sound Of Summer Tee</a>
            </div>
          </li>
          <li class="related__product">
            <div class="product__card">
              <div class="product__card-variants">
                <div class="slick-list">
                  <div class="slick-track">
                    <a href="" class="product__card-variant">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_300x300@2x.jpg?v=1623705541""
                      alt="" />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                    <a href="" class="product__card-variant hidden">
                      <img
                        src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_300x300@2x.jpg?v=1623705541"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
              </div>
              <ul class="product__card-thumbs">
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_BLAC_1_3e6dadb3-55ef-47dc-a241-08bbb89165f2_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                    src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_WHIT_1_f13d8fcd-be32-4906-9b83-51ac42760bbf_40x40@2x.jpg?v=1623705541""
                    alt="" />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_NAVY_1_bfa9d090-9a6f-40fe-9b2a-bfaafc768816_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_PYEL_1_794389e2-81fa-4d56-9472-0e46a4ec89aa_40x40@2x.jpg?v=1623268371"
                      alt=""
                    />
                  </button>
                </li>
                <li class="product__card-thumb">
                  <button class="product__card-thumb-trigger">
                    <img
                      src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/1904692_KHAK_1_213fbd3a-c7a0-421a-acd4-90ca74f8b899_40x40@2x.jpg?v=1623705541"
                      alt=""
                    />
                  </button>
                </li>
              </ul>
              <a href="" class="product__card-title">Sound Of Summer Tee</a>
            </div>
          </li>
        </ul>
      </div>
    </div>