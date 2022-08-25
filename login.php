<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Book Shop</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icon/favicon.jpg">

  <link rel="stylesheet" href="assets/css/nv.css" />
  <link rel="stylesheet" href="assets/css/sx.css" />
  <link rel="stylesheet" href="assets/css/notyf.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css"> -->
  <?php include './inc/headscript.php' ?>
</head>

<body>
  <main class="login-bg">
    <div class="login-form-area">
      <div class="login-form">
        <div class="login-heading">
          <span>Login</span>
          <p>Enter Login details to get access</p>
        </div>

        <form id="login">
          <div class="input-box">
            <div class="single-input-fields">
              <label>Email Address</label>
              <input type="text" name="email" placeholder="Email address" />
            </div>
            <div class="single-input-fields">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Password" />
            </div>
            <div class="single-input-fields login-check">
              <input type="checkbox" id="fruit1" name="keep-log" />
              <label for="fruit1">Keep me logged in</label>
              <a href="#" class="f-right">Forgot Password?</a>
            </div>
          </div>

          <div class="login-footer">
            <p>
              Don’t have an account? <a href="register">Sign Up</a> here
            </p>
            <button class="submit-btn3">Login</button>
          </div>
        </form>

      </div>
    </div>
  </main>


  <?php include './inc/scripts.php' ?>
  <?php
    
    $url = isset($_GET['return_to']) ? $_GET['return_to'] : "./" ;
   ?>
  <script>
    document.getElementById('login').onsubmit = function(e) {
      e.preventDefault();
      fetch('./req/login.php', {
        method: 'POST',
        body : new FormData(document.getElementById('login'))
      }).then(res => res.json().then(data =>  {
        data.msgClass == 'success' ? window.location.href='<?= $url ?>' : (document.getElementById('login').reset())
      }))
    }
  </script>



</body>

</html>