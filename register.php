<?php
    require $_SERVER['DOCUMENT_ROOT']. "/bookstore/config/DB.php";
    $db = new DB();
    
    $msg = "";
    $msgClass =  '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) ) {
        

        // print_r($_POST);
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $full_name = htmlentities(trim($full_name));
        $email = htmlentities(trim($email));
        $password = htmlentities(trim($password));

        $res = $db->CreateUser($full_name, $email, $password);
        // json_encode($res);
        
        // json_decode($res);
        if ($res['msgClass'] == 'success') { 
          header('location: ./login');
        } else {
          // $msg = '';
          // $msgClass = '';
          header('location: ./register?signup=error');
        }

    }


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

  <link rel="stylesheet" href="assets/css/nv.css" />
  <link rel="stylesheet" href="assets/css/sx.css" />
  <!-- <link rel="stylesheet" href="assets/css/notyf.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
  <?php include './inc/headscript.php' ?>
</head>

<body>

  <main class="login-bg">

    <div class="register-form-area">
      <div class="register-form text-center">

        <div class="register-heading">
          <span>Sign Up</span>
          <p>Create your account to get full access</p>
        </div>

        <form id="register" method="POST" action="<?= htmlentities($_SERVER['PHP_SELF']) ?>">
          <div class="input-box">
            <div class="single-input-fields">
              <label>Full name</label>
              <input type="text" name="full_name" placeholder="Enter full name">
            </div>
            <div class="single-input-fields">
              <label>Email Address</label>
              <input type="email" name="email" placeholder="Enter email address">
            </div>
            <div class="single-input-fields">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Password">
            </div>

            <div class="register-footer">
              <p> Already have an account? <a href="./login"> Login</a> here</p>
              <button role="submit" name="submit" class="submit-btn3">Sign Up</button>
            </div>

          </div>
        </form>

      </div>
    </div>

  </main>


  <?php include './inc/scripts.php' ?>
  <!-- <script>
    const notyf=new Notyf,form=document.querySelector("#register");form.onsubmit=(e=>{e.preventDefault(),fetch("./req/register.php",{method:"POST",body:new FormData(form)}).then(e=>e.json()).then(e=>{"success"==e.msgClass?notyf.success({message:e.msg,duration:3e3,position:{x:"right",y:"top"}}):notyf.error({message:e.msg,duration:3e3,position:{x:"right",y:"top"}})})});
  </script> -->
</body>

</html>