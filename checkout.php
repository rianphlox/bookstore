<?php 
    require './config/DB.php';
    $db = new DB();
    session_start();
    $email = isset($_SESSION['email']) ? strtolower(explode('@', $_SESSION['email'])[0]) : '';
    // echo $email;

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Book Shop</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icon/favicon.jpg">

  <link rel="stylesheet" href="assets/css/A.bootstrap.min.css+owl.carousel.min.css+slicknav.css+animate.min.css+price_rangs.css+magnific-popup.css+fontawesome-all.min.css+themify-icons.css+slick.css+nice-select.css,Mcc.t4sS_3xQnX.css.pagespeed.cf.rBbHLQ6N_H.css" />
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
                <h2>Check Out</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="checkout_area section-padding">
      <div class="container">
        <?php if (!isset($_SESSION['email'])) : ?>
          <div class="returning_customer">
            <div class="check_title">
              <h2>
                Returning Customer?
                <a href="login">Click here to login</a>
              </h2>
            </div>
            <p>
              If you have shopped with us before, please enter your details in the
              boxes below. If you are a new customer, please proceed to the
              Billing & Shipping section.
            </p>
            <form class="row contact_form" action="#" method="post" novalidate>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="name" name="name" value=" " />
                <span class="placeholder" data-placeholder="Username or Email"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="password" class="form-control" id="password" name="password" value="" />
                <span class="placeholder" data-placeholder="Password"></span>
              </div>
              <div class="col-md-12 form-group d-flex flex-wrap">
                <a href="login" value="submit" class="btn"> log in</a>
                <div class="checkout-cap ml-5">
                  <input type="checkbox" id="fruit01" name="keep-log">
                  <label for="fruit01">Create an account?</label>
                </div>
              </div>
            </form>
          </div>
          <br />
        <?php endif; ?>

        <div class="cupon_area">
          <div class="check_title">
            <h2> Have a coupon?
              <a href="#">Click here to enter your code</a>
            </h2>
          </div>
          <input type="text" placeholder="Enter coupon code" />
          <a class="btn" href="#">Apply Coupon</a>
        </div>
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Billing Details</h3>
              <form class="row contact_form" action="#" method="post" novalidate>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="first" name="name" />
                  <span class="placeholder" data-placeholder="First name"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="last" name="name" />
                  <span class="placeholder" data-placeholder="Last name"></span>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="number" name="number" />
                  <span class="placeholder" data-placeholder="Phone number"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="compemailany" />
                  <span class="placeholder" data-placeholder="Email Address"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">Country</option>
                    <option value="2">Country</option>
                    <option value="4">Country</option>
                  </select>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add1" name="add1" />
                  <span class="placeholder" data-placeholder="Address line 01"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add2" name="add2" />
                  <span class="placeholder" data-placeholder="Address line 02"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="city" name="city" />
                  <span class="placeholder" data-placeholder="Town/City"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">District</option>
                    <option value="2">District</option>
                    <option value="4">District</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
                </div>
                <div class="col-md-12 form-group">
                  <div class="checkout-cap">
                    <input type="checkbox" id="fruit1" name="keep-log">
                    <label for="fruit1">Create an account?</label>
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <h3>Shipping Details</h3>
                    <!-- <div class="checkout-cap">
                      <input type="checkbox" id="f-option3" name="selector" />
                      <label for="f-option3">Ship to a different address?</label>
                    </div> -->
                  </div>
                  <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <a href="javascript:void(0);">Product<span>Total</span>
                    </a>
                  </li>
                  <?php $results = $db->getCartItems($email); ?>
                  <?php if (!$results->num_rows): ?> <!-- Nothing in that person cart -->
                    <li>
                      <a href="javascript:void(0);">Nothing in cart
                        <span class="middle"></span>
                        <span class="last"></span>
                      </a>
                    </li>
                    <?php else: ?>
                      <?php foreach($results as $result): ?>
                        <?php extract($result) ?>
                        <li>
                          <a href="javascript:void(0);"><?= $name ?>
                            <span class="middle">x <?= $quantity ?></span>
                            <span class="last">$<?= $price ?>.00</span>
                          </a>
                        </li>
                      <?php endforeach; ?>
                  <?php endif; ?>
                  
                </ul>
                <ul class="list list_2">
                  <?php $total = $db->getTotalAmount($email) ; ?>
                  <li>
                    <a href="javascript:void(0);">Subtotal <span>$<?= $total ?>.00</span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Total<span>$<?= $total ?>.00</span>
                    </a>
                  </li>
                </ul>

                <!-- <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Paypal </label>
                    <img src="assets/img/gallery/card.jpg" alt="" data-pagespeed-url-hash="3046227137" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    <div class="check"></div>
                  </div>
                  <p> Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                  </p>
                </div> -->
                <div class="creat_account checkout-cap">
                  <input type="checkbox" id="f-option8" name="selector" />
                  <label for="f-option8">I’ve read and accept the <a href="#">terms & conditions*</a> </label>
                </div>
                <a class="btn w-100" href="#">Proceed to Paystack</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php include './inc/footer.php'; ?>

  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>


  <?php include './inc/scripts.php'; ?>
  <script src="https://js.paystack.co/v2/inline.js"></script>
</body>

</html>