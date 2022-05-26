<?php
        require 'C:\xampp\htdocs\bookstore\config\DB.php';
        $db = new DB();
        $conn = $db->conn;

        if (isset($_GET['id'])) {
          $userId = $conn->real_escape_string($_GET['id']);
          $sql = "select * from bookstore where id = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param('i', $userId);
          $stmt->execute();
          $book = $stmt->get_result()->fetch_assoc();
          extract($book);

        } else {
          header('location: tables-basic');
        }
        


        if (isset($_POST['submit'])) {
          $bookname = $_POST['bookname'];
          $author = $_POST['author'];
          $price = $_POST['price'];
          $quantity = $_POST['quantity'];
          $category = $_POST['category'];
          $about = $_POST['about'];
          $updated_id = (int)$_POST['updated_id'];
        
          
          $sql = "UPDATE `bookstore` SET `name` = ?, price = ?, author = ?, quantity = ?, category = ?, about = ? WHERE `bookstore`.`id` = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param('sssissi', $bookname, $price, $author, $quantity, $category, $about, $updated_id);
          if ($stmt->execute()) {
            header('location: tables-basic');
          }
          
        }

?>

<?php include '../inc/head.php' ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <!-- aside menu bar -->
      <?php include '../inc/aside.php' ?>
      <!-- end aside menu bar -->

      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a class="github-button" href="" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Entry</h4>


            <!-- Basic Layout -->
            <div class="row">
              
              <div class="col-sm-12 col-md-8 col-xl-6 mx-auto">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Book Entry</h5>
                    <small class="text-muted float-end">Enter book details</small>
                  </div>
                  <div class="card-body">
                    <form id="edit" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Book Name</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-bookname2" class="input-group-text"><i class="bx bx-user"></i></span>
                          <input type="text" name="bookname" class="form-control" id="basic-icon-default-bookname" value="<?= $name ?>" aria-label="John Doe" aria-describedby="basic-icon-default-bookname2" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-author">Author</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-author2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                          <input type="text" name="author" id="basic-icon-default-author" class="form-control" value="<?= $author ?>" aria-label="James Billy" aria-describedby="basic-icon-default-author2" />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-price">Price</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-price" class="input-group-text"><i class="bx bx-dollar "></i></span>
                          <input type="number" name="price" id="basic-icon-default-price" class="form-control phone-mask" value="<?= $price ?>" aria-label="69.99" aria-describedby="basic-icon-default-phone2" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-quantity">Quantity</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-quantity" class="input-group-text"><i class="bx bx-trending-up"></i></span>
                          <input type="number" name="quantity" id="basic-icon-default-quantity" class="form-control phone-mask" value="<?= $quantity ?>" aria-label="5" aria-describedby="basic-icon-default-quantity" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Category</label>
                        <select name="category" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="sci-fi">Sci-fi</option>
                          <option value="romance">Romance</option>
                          <option value="horror">Horror</option>
                          <option value="Crime">Crime</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">About</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                          <textarea name="about" id="basic-icon-default-message" class="form-control" aria-label="" aria-describedby="basic-icon-default-message2"><?= $about ?></textarea>
                        </div>
                      </div>
                      <input type="hidden" name="updated_id" value="<?= $userId ?>">
                      
                      <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <?php include '../inc/footer.php' ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>


  <!-- Page JS -->
  
  <script src="../assets/js/ui-toasts.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  
</body>

</html>