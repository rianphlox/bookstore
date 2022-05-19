<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Book Shop</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="https://cutt.ly/kG4ZJXw" />

  <link rel="stylesheet" href="assets/css/nv.css" />
  <link rel="stylesheet" href="assets/css/sx.css" />
  <!-- <link rel="stylesheet" href="assets/css/notyf.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
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
  <script>
    const notyf = new Notyf();

    // notyf.error({
    //   message: 'Accept the terms before moving forward',
    //   duration: 9000,
    //   types: [
    //     {
    //       type: 'warning',
    //       background: 'orange',
    //       icon: {
    //         className: 'material-icons',
    //         tagName: 'i',
    //         text: 'warning'
    //       }
    //     },
    //     {
    //       type: 'error',
    //       background: 'indianred',
    //       duration: 2000,
    //       dismissible: true
    //     }
    //   ]
    // })

    form = document.querySelector('#login');
    form.onsubmit = e => {
      e.preventDefault()
      fetch('./req/login.php', {
          method: "POST",
          body: new FormData(form)
        })
        .then(res => res.json())
        .then(data => {

          // const notyf = new Notyf();
          data.msgClass == 'success' ? (notyf.success({
            // message: data.msg,
            duration: 2000,
            icon: true,
            position: {
              x: "right",
              y: "top"
            },

          })) : (notyf.error({
            message: data.msg,
            duration: 2000,
            icon: true,
            position: {
              x: "right",
              y: "top"
            },
            
          }));


        })

    }
  </script>

  <!-- <script>
    const notyf = new Notyf();


    const form = document.querySelector('#login')
    form.addEventListener('submit', e => {
      e.preventDefault();
      fetch('./req/login.php', {
          method: "POST",
          body: new FormData(form)
        })
        .then(res => res.json())
        .then(data => {
          
          const notyf = new Notyf();
          data.msgClass == 'success' ? (notyf.success({
              message: data.msg,
              duration: 2000,
              icon: true,
              position: {
                x: "right",
                y: "top"
              }
            })) : (notyf.error({
              message: data.msg,
              duration: 2000,
              icon: true,
              position: {
                x: "right",
                y: "top"
              }
            }));
          
          
        })
    })
  </script> -->


</body>

</html>