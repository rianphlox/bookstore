<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Book Shop</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/xfavicon.png.pagespeed.ic.OYy94fDeJN.webp">

  <link rel="stylesheet" href="assets/css/nv.css" />
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <?php include './inc/header.php' ?>
  <main>

    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="slider-area">
            <div class="slider-height2 slider-bg5 d-flex align-items-center justify-content-center">
              <div class="hero-caption hero-caption2">
                <h2>Cart</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="cart_area section-padding">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="assets/img/gallery/xbest-books1.jpg.pagespeed.ic.a3LkFxg89O.webp" alt="" data-pagespeed-url-hash="4146589661" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                      </div>
                      <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$360.00</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment"> <i class="ti-plus"></i></span>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="assets/img/gallery/xbest_selling1.jpg.pagespeed.ic.KAl4WKwsoc.webp" alt="" data-pagespeed-url-hash="1552297109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                      </div>
                      <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$360.00</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                      <input class="input-number2" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment"> <i class="ti-plus"></i></span>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                </tr>
                <tr class="bottom_button">
                  <td>
                    <a class="btn" href="#">Update Cart</a>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="cupon_text float-right">
                      <a class="btn" href="#">Close Coupon</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5>$2160.00</h5>
                  </td>
                </tr>
                <tr class="shipping_area">
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Shipping</h5>
                  </td>
                  <td>
                    <div class="shipping_box">
                      <ul class="list">
                        <li>
                          Flat Rate: $5.00
                          <input type="radio" aria-label="Radio button for following text input">
                        </li>
                        <li>
                          Free Shipping
                          <input type="radio" aria-label="Radio button for following text input">
                        </li>
                        <li>
                          Flat Rate: $10.00
                          <input type="radio" aria-label="Radio button for following text input">
                        </li>
                        <li class="active">
                          Local Delivery: $2.00
                          <input type="radio" aria-label="Radio button for following text input">
                        </li>
                      </ul>
                      <h6>
                        Calculate Shipping
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </h6>
                      <select class="shipping_select">
                        <option value="1">Bangladesh</option>
                        <option value="2">India</option>
                        <option value="4">Pakistan</option>
                      </select>
                      <select class="shipping_select section_bg">
                        <option value="1">Select a State</option>
                        <option value="2">Select a State</option>
                        <option value="4">Select a State</option>
                      </select>
                      <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                      <a class="btn" href="#">Update Details</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="checkout_btn_inner float-right">
              <a class="btn" href="#">Continue Shopping</a>
              <a class="btn checkout_btn" href="#">Proceed to checkout</a>
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