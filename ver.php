<?php


include "database.php";




?>
<!doctype html>
<html lang="fa">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ارغوان</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap4-rtl.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<html class="rtl">
<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">صفحه اصلی</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">درباره ما</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    محصولات
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="product_list.html"> لیست محصولات</a>
                                    <a class="dropdown-item" href="single-product.html">جزئیات محصول</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    صفحات
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="login.html">
                                        ورود

                                    </a>
                                    <a class="dropdown-item" href="checkout.html">چک کردن محصولات</a>
                                    <a class="dropdown-item" href="cart.html">سبد خرید</a>
                                    <a class="dropdown-item" href="confirmation.html">تایید نهایی</a>
                                    <a class="dropdown-item" href="elements.html">جزئیات</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    وبلاگ
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="blog.html"> وبلاگ</a>
                                    <a class="dropdown-item" href="single-blog.html">صفحه داخلی وبلاگ</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">تماس با ما</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href="cart.html">
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>


</header>
<body>

<form class="row contact_form" action="verification.php" method="post" novalidate="novalidate">
<div class="col-lg-6 col-md-6">

            <input type="text" class="form-control" name="code" id="phonecode" placeholder="لطفا شماره ای که برایتان ارسال شد اینجا وارد کنید">
        </div>
    </div>
</div>
    <br> </br>
<div class="col-md-12 form-group">
    <div class="creat_account d-flex align-items-center">
        <button type="submit" name="submit" class="btn">ثبت نام</button>

    </div>
    </form>









<!-- jquery plugins here-->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/swiper.min.js"></script>
<!-- swiper js -->
<script src="js/mixitup.min.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>
</html>

