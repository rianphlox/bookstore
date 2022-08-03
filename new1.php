<?php
    require_once './config/DB.php';
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
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icon/xfavicon.png">

  <link rel="stylesheet" href="assets/css/nv.css" />
  <link rel="stylesheet" href="assets/css/sx.css" />

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
              <tbody id="items">
                  <!-- <tr>
                    <td>
                      <div class="media">
                        <div class="d-flex">
                          <img src="assets/img/icon/<?= $img_path ?>" alt="" data-pagespeed-url-hash="1552297109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        </div>
                        <div class="media-body">
                          <p><?= $name ?></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>$<?= $price ?></h5>
                    </td>
                    <td>
                      <div class="product_count">
                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number2" type="text" value="<?= $quantity ?>" min="0" max="10">
                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                      </div>
                    </td>
                    <td>
                      <h5>$<?= $price  ?></h5>
                    </td>
                  </tr> -->
                    
                    
                  
                    

                <!-- <tr class="bottom_button">
                  <td>
                    <a class="btn" href="#">Update Cart</a>
                  </td>
                  <td></td>
                  <td></td> --> <!-- uncomment here -->
                  <!-- <td>
                    <div class="cupon_text float-right">
                      <a class="btn" href="#">Close Coupon</a>
                    </div>
                  </td> --> 
                <!-- </tr> uncomment here -->
                <!-- <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    
                    <h5>$<?= $total ?>.00</h5>
                  </td>
                </tr> -->
                
              </tbody>
            </table>
            <div class="checkout_btn_inner float-right">
              <a class="btn" href="./categories">Continue Shopping</a>
              <a class="btn checkout_btn" href="./checkout">Proceed to checkout</a>
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
  <script>
      fetch('./req/cart.php')
      .then(res => res.text())
      .then(data => console.log(data))
  </script>
</body>

</html>