<?php 
include('functions/init.php');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Karma Shop</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body id="category">
    <?php include('Header\Footer/header.php'); ?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
      <div class="container">
        <div
          class="
            breadcrumb-banner
            d-flex
            flex-wrap
            align-items-center
            justify-content-end
          "
        >
          <div class="col-first">
            <h1>Shop Category page</h1>
            
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Browse Categories</div>

            <?php
					      $query="SELECT Name FROM category";
                	$result=mysqli_query($conn,$query);
                	while($row=mysqli_fetch_object($result)){
				        ?>
                
            <ul class="main-categories">
              <li class="main-nav-list">
                <a
                  data-toggle="collapse"
               
                  aria-expanded="false"
                  aria-controls="fruitsVegetable"
                  href="category.php?categoryName=<?php echo $row->Name; ?>"
                  ><span class="lnr lnr-arrow-right"></span><?php echo $row->Name?><span class="number"><?php   ?></span></a
                >
                <!-- <ul
                  class="collapse"
                  id="fruitsVegetable"
                  data-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="fruitsVegetable"
                >
                  <li class="main-nav-list child">
                    <a href="#">Frozen Fish<span class="number">(13)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">Dried Fish<span class="number">(09)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">Fresh Fish<span class="number">(17)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#"
                      >Meat Alternatives<span class="number">(01)</span></a
                    >
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">Meat<span class="number">(11)</span></a>
                  </li>
                </ul> -->
              </li>
            </ul>
            <?php 
            }
            ?>
              </li>
            </ul>
          </div>
          <div class="sidebar-filter mt-50">
            <div class="top-filter-head">Product Filters</div>
            <div class="common-filter">
              <div class="head">Brands</div>
              <form action="#">
                <ul>
                  
				        <?php
					      $query="SELECT DISTINCT Name FROM brand";
                	$result=mysqli_query($conn,$query);
                	while($row=mysqli_fetch_object($result)){
                    
						
				        ?>
                
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="<?php echo $row->Name; ?>"
                      name="brand"
                      
                    /><a href="category.php?brandName=<?php echo $row->Name; ?>" for="apple"><?php echo $row->Name ?><span>()</span></a>
                  </li>
                  <?php
					        }
				        ?>
                </ul>
              </form>
            </div>
            <div class="common-filter">
              <div class="head">Color</div>
              <form action="#">
                <ul>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="black"
                      name="color"
                    /><label for="black">Black<span>(29)</span></label>
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="balckleather"
                      name="color"
                    /><label for="balckleather"
                      >Black Leather<span>(29)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="blackred"
                      name="color"
                    /><label for="blackred"
                      >Black with red<span>(19)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="gold"
                      name="color"
                    /><label for="gold">Gold<span>(19)</span></label>
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="spacegrey"
                      name="color"
                    /><label for="spacegrey">Spacegrey<span>(19)</span></label>
                  </li>
                </ul>
              </form>
            </div>
            <div class="common-filter">
              <div class="head">Price</div>
              <div class="price-range-area">
                <div id="price-range"></div>
                <div class="value-wrapper d-flex">
                  <div class="price">Price:</div>
                  <span>$</span>
                  <div id="lower-value"></div>
                  <div class="to">to</div>
                  <span>$</span>
                  <div id="upper-value"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
              <select>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
              </select>
            </div>
            <div class="sorting mr-auto">
              <select>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
              </select>
            </div>
            <div class="pagination">
              <a href="#" class="prev-arrow"
                ><i class="fa fa-long-arrow-left" aria-hidden="true"></i
              ></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#" class="dot-dot"
                ><i class="fa fa-ellipsis-h" aria-hidden="true"></i
              ></a>
              <a href="#">6</a>
              <a href="#" class="next-arrow"
                ><i class="fa fa-long-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </div>
          <!-- End Filter Bar -->
          <!-- Start Best Seller -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
             <?php
					      $query="SELECT * FROM sneakers";
                	$result=mysqli_query($conn,$query);
                	while($row=mysqli_fetch_object($result)){
						
				        ?>
              <!-- single product -->
              <div class="col-lg-4 col-md-6">
                <div class="single-product">
                 <a href="single-product.php?SneakersId=<?php echo $row->SneakersId ?>">
							<img class="img-fluid" src="<?php echo $row->Photo; ?>" alt="Photo">
							</a>
                  <div class="product-details">
                    <h6><a href="single-product.php?SneakersId=<?php echo $row->SneakersId ?>"><?php echo $row->Name; ?></a></h6>
                    <div class="price">
                      <h6><?php echo $row->Price; ?>.$</h6>
                     
                    </div>
                    <div class="prd-bottom">
                      <a href="" class="social-info">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                      </a>
                    
                    </div>
                  </div>
                </div>
              </div>
              <?php
					      }
				        ?>
            </div>
          </section>
          <!-- End Best Seller -->
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting mr-auto">
              <select>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
              </select>
            </div>
            <div class="pagination">
              <a href="#" class="prev-arrow"
                ><i class="fa fa-long-arrow-left" aria-hidden="true"></i
              ></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#" class="dot-dot"
                ><i class="fa fa-ellipsis-h" aria-hidden="true"></i
              ></a>
              <a href="#">6</a>
              <a href="#" class="next-arrow"
                ><i class="fa fa-long-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </div>
          <!-- End Filter Bar -->
        </div>
      </div>
    </div>

    

    <!-- start footer Area -->
<?php include('Header\Footer/footer.php'); ?>
    <!-- End footer Area -->

    <!-- Modal Quick Product View -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="container relative">
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="product-quick-view">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="quick-view-carousel">
                  <div
                    class="item"
                    style="background: url(img/organic-food/q1.jpg)"
                  ></div>
                  <div
                    class="item"
                    style="background: url(img/organic-food/q1.jpg)"
                  ></div>
                  <div
                    class="item"
                    style="background: url(img/organic-food/q1.jpg)"
                  ></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="quick-view-content">
                  <div class="top">
                    <h3 class="head">Mill Oil 1000W Heater, White</h3>
                    <div class="price d-flex align-items-center">
                      <span class="lnr lnr-tag"></span>
                      <span class="ml-10">$149.99</span>
                    </div>
                    <div class="category">Category: <span>Household</span></div>
                    <div class="available">
                      Availibility: <span>In Stock</span>
                    </div>
                  </div>
                  <div class="middle">
                    <p class="content">
                      Mill Oil is an innovative oil filled radiator with the
                      most modern technology. If you are looking for something
                      that can make your interior look awesome, and at the same
                      time give you the pleasant warm feeling during the winter.
                    </p>
                    <a href="#" class="view-full"
                      >View full Details
                      <span class="lnr lnr-arrow-right"></span
                    ></a>
                  </div>
                  <div class="bottom">
                    <div class="color-picker d-flex align-items-center">
                      Color:
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                    </div>
                    <div
                      class="quantity-container d-flex align-items-center mt-15"
                    >
                      Quantity:
                      <input
                        type="text"
                        class="quantity-amount ml-15"
                        value="1"
                      />
                      <div class="arrow-btn d-inline-flex flex-column">
                        <button
                          class="increase arrow"
                          type="button"
                          title="Increase Quantity"
                        >
                          <span class="lnr lnr-chevron-up"></span>
                        </button>
                        <button
                          class="decrease arrow"
                          type="button"
                          title="Decrease Quantity"
                        >
                          <span class="lnr lnr-chevron-down"></span>
                        </button>
                      </div>
                    </div>
                    <div class="d-flex mt-20">
                      <a href="#" class="view-btn color-2"
                        ><span>Add to Cart</span></a
                      >
                      <a href="#" class="like-btn"
                        ><span class="lnr lnr-layers"></span
                      ></a>
                      <a href="#" class="like-btn"
                        ><span class="lnr lnr-heart"></span
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
