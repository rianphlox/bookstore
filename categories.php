<?php
require_once './config/DB.php';

$db = new DB();
$books = $db->getAllBooks();

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Book Shop</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://cutt.ly/kG4ZJXw" />

  <link rel="stylesheet" href="assets/css/nv.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/notyf.min.css">

  <?php include './inc/headscript.php' ?>
</head>

<body>
  <header>
    <div class="header-area">
      <div class="main-header ">
        <div class="header-top ">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="d-flex justify-content-between align-items-center flex-sm">
                  <div class="header-info-left d-flex align-items-center">

                    <div class="logo">
                      <a href="./">
                        <?php include './inc/_header.php' ?>
                        <img src="assets\img\icon\abcbook.jpg">
                      </a>
                    </div>

                    <form action="#" class="form-box">
                      <input type="text" name="Search" placeholder="Search book by author or publisher">
                      <div class="search-icon">
                        <i class="ti-search"></i>
                      </div>
                    </form>
                  </div>
                  <div class="header-info-right d-flex align-items-center">
                    <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Track Order</a></li>
                      <li class="shopping-card">
                        <a href="cart"><img src="assets/img/icon/cart.svg" alt="" data-pagespeed-url-hash="605441959" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                      </li>
                      <li><a href="./login" class="btn header-btn">Sign in</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom  header-sticky">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-12">

                <div class="logo2">
                  <a href="./"><img src="data:image/webp;base64,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" alt="" data-pagespeed-url-hash="3800066785" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                </div>

                <div class="main-menu text-center d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a href="./">Home</a></li>
                      <li><a href="categories">Categories</a></li>
                      <li><a href="about">About</a></li>
                      <li><a href="#">Pages</a>
                        <ul class="submenu">
                          <li><a href="login">login</a></li>
                          <li><a href="cart">Cart</a></li>
                          <li><a href="checkout">Checkout</a></li>
                          <li><a href="book-details">book Details</a></li>
                          <li><a href="blog_details">Blog Details</a></li>
                          <li><a href="elements">Element</a></li>
                        </ul>
                      </li>
                      <li><a href="blog">Blog</a></li>
                      <li><a href="contact">Contect</a></li>
                    </ul>
                  </nav>
                </div>
              </div>

              <div class="col-xl-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>

    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="slider-area">
            <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
              <div class="hero-caption hero-caption2">
                <h2>Book Category</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="listing-area pt-50 pb-50">
      <div class="container">
        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-6">

            <div class="category-listing mb-50">

              <div class="single-listing">

                <div class="select-Categories pb-30">
                  <div class="small-tittle mb-20">
                    <h4>Filter by Genres</h4>
                  </div>
                  <label class="container">History
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Horror - Thriller
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Love Stories
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Science Fiction
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Biography
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </div>


                <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow mb-40">
                  <div class="small-tittle">
                    <h4>Filter by Price</h4>
                  </div>
                  <div class="widgets_inner">
                    <div class="range_item">
                      <input type="text" class="js-range-slider" value="" />
                      <div class="d-flex align-items-center">
                        <div class="price_value d-flex justify-content-center">
                          <input type="text" class="js-input-from" id="amount" readonly />
                          <span>to</span>
                          <input type="text" class="js-input-to" id="amount" readonly />
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>


                <div class="select-job-items2 mb-30">
                  <div class="col-xl-12">
                    <select name="select2">
                      <option value="">Filter by Rating</option>
                      <option value="">5 Star Rating</option>
                      <option value="">4 Star Rating</option>
                      <option value="">3 Star Rating</option>
                      <option value="">2 Star Rating</option>
                      <option value="">1 Star Rating</option>
                    </select>
                  </div>
                </div>


                <div class="select-Categories pt-100 pb-60">
                  <div class="small-tittle mb-20">
                    <h4>Filter by Publisher</h4>
                  </div>
                  <label class="container">Green Publications
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Anondo Publications
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Rinku Publications
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Sheba Publications
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Red Publications
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </div>


                <div class="select-Categories">
                  <div class="small-tittle mb-20">
                    <h4>Filter by Author Name</h4>
                  </div>
                  <label class="container">Buster Hyman
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Phil Harmonic
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Cam L. Toe
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Otto Matic
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Juan Annatoo
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </div>

              </div>
            </div>

          </div>

          <div class="col-xl-8 col-lg-8 col-md-6">
            <div class="row justify-content-end">
              <div class="col-xl-4">
                <div class="product_page_tittle">
                  <div class="short_by">
                    <select name="#" id="product_short_list">
                      <option>Browse by popularity</option>
                      <option>Name</option>
                      <option>NEW</option>
                      <option>Old</option>
                      <option>Price</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="best-selling p-0">
              <div class="row">
                <?php foreach ($books as $book) : ?>
                  <?php extract($book) ?>
                  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                    <div class="properties pb-30">
                      <div class="properties-card">
                        <div class="properties-img">
                          <a href="book-details"><img src="./assets/img/icon/<?= $img_path ?>" alt="" data-pagespeed-url-hash="3024796714" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        </div>
                        <div class="properties-caption properties-caption2">
                          <h3><a href="book-details"><?= $name ?></a></h3>
                          <p><?= $author ?></p>
                          <div class="properties-footer d-flex justify-content-between align-items-center">
                            <div class="review">
                              <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                              </div>
                              <p>(<span>120</span> Review)</p>
                            </div>
                            <div class="price">
                              <span>$<?= $price ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="white-btn border-btn border-btn2 " type="submit">Add to Cart</button>
                  </div>

                <?php endforeach; ?>



                
            <div class="row">
              <div class="col-xl-12">
                <div class="more-btn text-center mt-15">
                  <a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="subscribe-area">
      <div class="container">
        <div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="assets/img/gallery/section-bg1.jpg">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-9">
              <h3>Join Newsletter</h3>
              <p>Lorem started its journey with cast iron (CI) products in 1980. The initial main objective was to ensure pure water and affordable irrigation.</p>
              <form action="#">
                <input type="text" placeholder="Enter your email">
                <button class="subscribe-btn">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php include './inc/footer.php' ?>

  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>


  <?php include './inc/scripts.php' ?>
  
</body>

</html>