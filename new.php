<?php
require $_SERVER['DOCUMENT_ROOT'] . "/bookstore/config/DB.php";
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
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/sx.css" />
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
                                            <li><a href="login" class="btn header-btn">Sign in</a></li>
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
                                    <a href="./"><img src="data:image/webp;base64,UklGRlgHAABXRUJQVlA4TEwHAAAvpgAJEPWKgbRtuvq3vf0SImICgFT1Q7iRJCm2zoC3ODOfpO+/l4+2P57ctnySmVF7Jjz5MzNjQGgkyZHEH+X5ysyz/wiWYdtIimOzDIcPUGzbWt6ESTEzW2b6VWzGEIsWip/rDJj03zeCqj4dVcXcCTDTJZC0uQX2GnBb26or0X/Zw70X5lWwEyQyOrFIKIAm5mOJ7LoChGMBSQrDFLRtI8fYbfdfjaa2lQRgZicAuwHcLUAAC5jgNzDC60AMO8lAkiQZ5T6WMrOGN0i2bdu0nXX22vecffDw/3+bg72ih+KoxinZtq2ybTu5au0htdQct20kSfkHuM+rLLm6gQ1iGEaS01aSS8CZnJEACY+hatu+Ppm7b0nQA3CoMO1Ud8iLvr0d5wS8zaVhH9LHGTjU/yL+snHbRpLZ7alqHsFapS/kLHqxCBb9WnRl0YHGa/ZEd+QB0xiSOCjKJq9YvG9hZtHz1tYA2GQtMGnPZHQy+dXkXXuiDnrsCbcpY5OPu4pe/f+2sgZQElIFBaoc5k8GCjXVAY3JC6p8lXoGRZQ1gDqVRUOJaC+SdrpiBoJLtFmx5jaYEdYA6lwWHWWC9UiSeveU4PcgZtov/mDWF1r2RJrMBWUDZdn4z2Wb5OgJhmycgZaHUEY7Cqcxi44sgsVMJktOFoBkPehleMhEraKUlx3qS6WtrWdOM4FrKWiCXVWYTGs50UCic8TqgDLR3zBlh4pKu7uaijEcOCdwTAcxzFBmqEyrhGQQBXlh369VbNWt7fjA4JaCZDiUjMnopMgEkjYmrA6oYMlS6EQ5c3ioqID9oT/c3UMJ/TDGcG0AmFpkdcs1rAKUOOwT1vWj/PyIzmRgUWABCa4Je7BkobWfH8UF7A8id/fg7wzcS2JyPybaIfRWgI+STfwLyWTYorANJDzOpDlYctSnktL/fyYFyu8yZyallGfEtKkUX7uUHUU2GTDKJ0kWXhLNpPMhvwukNVhy2mdkSi8vHTO7t0zRa2EEDQigb1PVIs1RwvW53w5kWGhKaDrRgffoYNL5kuMF4vgm7MGSndbe3yNTEFjuK6xFygzEYwuB5l9Whp/nIYO31n0H0fVA2kIzJywtRSaTbi+5vUDc45uwB0suw+VEubi0BCYC8Py4+1fQk7Mlt2/1zKWUnkETvvXaQiLATdJC0ecEAhtrgc1kYx819gNpDZbctLa2Fh9bgMVzW42nmrvfsIqvQIHbAoA0bYlInEdpXC3DwuO0JsDkEbwxVSFQ3LdY7kNL2TfJPbNkIdynn2lE6MaNySNA3HBfsl2y2Xj5Fpeo1+t6RdqGEeyZtBCoiYmz88zEOQSKfYtlH1rqmSW7LlKdK3TmzGQFiHpFe9G8pvDTM8io13OJIE7tU0baAjcmBoOJPQSKymJRSUvJm+SeWbIvXNfP3cFgsgeImnEb4uaPeaE3+pxPbFCvAtNS87QF3tdSGuNxtZdAvqqYV9MSVie5Z5YcrDceV70AABj1LnYbUbLTzSr7+7AXnERATpK11w8ALCyUfQRyTTHX0BLWJrlnlnzeTcUVWpFY9YF5WBvDayLav1Q3SuRJXSg3bz3DAt/0sQEoVvJfWSmQrSuGWlrqmSVHd1MhQ//+FZUAQBVhExEHgykbDlEiVb5HNs80XrEAaQtcdMkKUFTxbKkUyOqLWT0t6fok98ySE2FcP6fOni2qYR3W4xaDiINBe6JAk5ddDdpS3S5NvaBdXVnMn7QFDrCFy8GDebXUywy0pBuT3DNLfj0nHBs6eLBAI7bbqNP8SAU7qyeZ59Hzvn53/GuaOlYtw8JVSepw9GjQCqSmYmqiJTUmuWeW9J8TsKGjR0MtYhsyVYDo/SvB6gB9GVMlg/ecLuRmB8q1SVmkPtInTmT1Ar6l2DPT4jcnuWeWfKp34kTAg67i7ssOVVXE3++tfPo9xNrdsdOvEr2V3LzOGQFKhoVBXz+kjTydGQV8a7FHocVbk9wzS7Y9JxBDp0+njWD1a6W0D8il3DJN+/3U9Ag+bc/TaFnH0CzxtC/BmsmMiX4/JYOZq2fhaBS+sRdZ8KntQAFR8F6BDwUY44QkRCsU+HRi+7EGmn5aHHqWo9FoJs9b+fWrt14DwLv0DQMKzmnwTMGOBtni7EmG7YAHOigumPVpExL0DwHw1FBd6Klg5lKBP3/+VOFaTu/tVshrGjR9OpHOHYO1rdxrvuQYr46Rl3JXpM+JCS0odaAHwMylIFsUVBS4Xlhw7QW1L7Y+J/frS6BWAvGIsJIMjxxJoA/ZNdV8V76/y1Mn/2vwcGHB2dvtPD8AZq4DcY7x6OiF5oKwNpLQ90vk2TRJiEmoIn+0Azq4lEhVo8sxwcx1xORCu49AQuPCWkeeTS35NoF1CfPRjHIzwcwlcEdgNjYLLG8F3hMY167te/tW4CeBFXEOdYoeiXS44+1bgWp1zbVvbwV+aNXtkKwlZi6BQ5Il+w5ti4c86lbI9++9HM+5vE3mg2TV9jHvAQ==" alt="" data-pagespeed-url-hash="3800066785" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                </div>

                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="./">Home</a></li>
                                            <li><a href="categories">Categories</a></li>
                                            <li><a href="about">About</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="./login">login</a></li>
                                                    <li><a href="./cart">Cart</a></li>
                                                    <li><a href="./checkout">Checkout</a></li>
                                                    <li><a href="./book-details">book Details</a></li>
                                                    <li><a href="./blog_details">Blog Details</a></li>
                                                    <li><a href="elements">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="./blog">Blog</a></li>
                                            <li><a href="./contact">Contact</a></li>
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

        <div class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-active dot-style">

                            <div class="single-slider slider-height slider-bg1 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg3 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="best-selling section-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Best Selling Books Ever</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="selling-active">

                            <?php foreach ($books as $book) : ?>
                                <?php extract($book) ?>
                                <div class="properties pb-20">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="./assets/img/icon/<?= $img_path ?>" alt="" data-pagespeed-url-hash="<?= $hash ?>" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption">
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
                                                    <span>$<?= $price; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="services-area2 top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="section-tittle d-flex justify-content-between align-items-center mb-40">
                                    <h2 class="mb-0">Featured This Week</h2>
                                    <a href="#" class="browse-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="services-active">

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/xbest-books1.jpg.pagespeed.ic.a3LkFxg89O.webp" alt="" data-pagespeed-url-hash="4146589661" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.svg" alt="" data-pagespeed-url-hash="301647970" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details" class="border-btn">View Details</a>
                                        </div>
                                    </div>

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/xbest-books1.jpg.pagespeed.ic.a3LkFxg89O.webp" alt="" data-pagespeed-url-hash="4146589661" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.svg" alt="" data-pagespeed-url-hash="301647970" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details" class="border-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

                        <div class="google-add">
                            <img src="assets/img/gallery/xad.jpg.pagespeed.ic.WvnALPgj6F.webp" alt="" class="w-100" data-pagespeed-url-hash="833297940" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="our-client section-padding best-selling">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">

                        <div class="section-tittle  mb-40">
                            <h2>Latest Published items</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="nav-button mb-40">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">All</a>
                                    <a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Horror</a>
                                    <a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Thriller</a>
                                    <a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Science Fiction</a>
                                    <a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab" aria-controls="nav-five" aria-selected="false">History</a>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp" alt="" data-pagespeed-url-hash="3613796556" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp" alt="" data-pagespeed-url-hash="3024796714" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp" alt="" data-pagespeed-url-hash="2435796872" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp" alt="" data-pagespeed-url-hash="3908296477" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp" alt="" data-pagespeed-url-hash="1846797030" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp" alt="" data-pagespeed-url-hash="2435796872" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp" alt="" data-pagespeed-url-hash="3908296477" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp" alt="" data-pagespeed-url-hash="1846797030" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp" alt="" data-pagespeed-url-hash="3613796556" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp" alt="" data-pagespeed-url-hash="3024796714" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp" alt="" data-pagespeed-url-hash="3613796556" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp" alt="" data-pagespeed-url-hash="3024796714" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp" alt="" data-pagespeed-url-hash="2435796872" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp" alt="" data-pagespeed-url-hash="3908296477" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp" alt="" data-pagespeed-url-hash="1846797030" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp" alt="" data-pagespeed-url-hash="3908296477" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp" alt="" data-pagespeed-url-hash="1846797030" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp" alt="" data-pagespeed-url-hash="3613796556" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp" alt="" data-pagespeed-url-hash="3024796714" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp" alt="" data-pagespeed-url-hash="2435796872" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp" alt="" data-pagespeed-url-hash="3613796556" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp" alt="" data-pagespeed-url-hash="3024796714" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp" alt="" data-pagespeed-url-hash="2435796872" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp" alt="" data-pagespeed-url-hash="3908296477" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp" alt="" data-pagespeed-url-hash="1846797030" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
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
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="more-btn text-center mt-15">
                            <a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg1.jpg">
                        <h2>The History<br> of Phipino</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg2.jpg">
                        <h2>Wilma Mumduya</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
    <footer>
        <div class="footer-wrappper section-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">

                                    <div class="footer-logo mb-25">
                                        <a href="./"><img src="assets\img\icon\abcbook.jpg" alt="" /></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Get the breathing space now, and we’ll extend your term at the other end year for go.</p>
                                        </div>
                                    </div>

                                    <div class="footer-social">
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Book Category</h4>
                                    <ul>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Horror - Thriller</a></li>
                                        <li><a href="#">Love Stories</a></li>
                                        <li><a href="#">Science Fiction</a></li>
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>&nbsp;</h4>
                                    <ul>
                                        <li><a href="#">Biography</a></li>
                                        <li><a href="#">Astrology</a></li>
                                        <li><a href="#">Digital Marketing</a></li>
                                        <li><a href="#">Software Development</a></li>
                                        <li><a href="#">Ecommerce</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Site Map</h4>
                                    <ul class="mb-20">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" style="color: black" target="_blank" rel="nofollow noopener">Colorlib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <?php include './inc/scripts.php' ?>
    
</body>

</html>