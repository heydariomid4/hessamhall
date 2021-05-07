<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    {!! SEO::generate(true) !!}

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

<!-- HEADER NAV BAR -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light py-3 shadow-sm">
        <a class="logo" href="#"><img src="image/logo.png" alt="logo"/></a>

        <div class="container">
            <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <i class="bi bi-list"></i>
            </button>
            <button type="button" class="btn-account">
                <i class="bi bi-person-fill"></i>
            </button>
            <form class="search-container" method="POST" action="">
                <input type="text" name="search" placeholder="جستجو..."
                       class="search-input animate__animated animate__fadeInLeft">
                <button type="button" class="btn-search">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" ><a href="#" class="nav-link" id="active">صفحه اصلی</a></li>
                    <li class="nav-item dropdown">
                        <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" class="nav-link">مجموعه ها <i class="bi bi-caret-down-fill"></i></a>
                        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">رستوران</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">تالار</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">اسب سواری</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">چایخانه</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">درباره ما</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">ارتباط با ما</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">گالری</a></li>
                    <li class="nav-item dropdown">
                        <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" class="nav-link">سفارش و رزرو آنلاین <i class="bi bi-caret-down-fill"></i></a>
                        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">سفارش غذا</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">رزرو تالار</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">رزرو اسب سواری</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"
                                   class="dropdown-item">رزرو چایخانه</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!------------------>
<!--LANDING SLIDER-->
<!------------------>
<section class="Modern-Slider">
    <!-- Item -->
    <div class="item">
        <div class="img-fill">
            <img src="image/slider1.png" alt="" >
            <div class="info">
                <div>
                    <h3>غذای اصیل ایرانی</h3>
                    <h5>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
        <div class="img-fill">
            <img src="image/slider2.jpg" alt="" >
            <div class="info">
                <div>
                    <h3>پیست اسب سواری</h3>
                    <h5>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
        <div class="img-fill">
            <img src="image/slider3.jpg" alt="" >
            <div class="info">
                <div>
                    <h3>چایخانه سنتی</h3>
                    <h5>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
        <div class="img-fill">
            <img src="image/slider4.jpg" alt="">
            <div class="info">
                <div>
                    <h3>تالار پذیرایی</h3>
                    <h5>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- // Item -->
</section>

<!-------------------->
<!--SERVICES SECTION-->
<!-------------------->

<section class="services-section js--wp-1">
    <h2 class="heading"><i class="bi bi-x-diamond-fill"></i> معرفی خدمات  <i class="bi bi-x-diamond-fill"></i></h2>
    <div class="services-box js--wp-2">
        <div>
            <img src="svg/fast-delivery.svg" alt="">
            <h3>ارسال سریع سفارشات</h3>
            <p>
                امکان سفارش و ررزو آنلاین
            </p>
        </div>
        <div>
            <img src="svg/garden.svg" alt="">
            <h3>محیطی  بی نظیر و زیبا</h3>
            <p>
                آماده پذیرایی از شما
            </p>
        </div>
        <div>
            <img src="svg/ingredients.svg" alt="">
            <h3>دستور پخت های خاص</h3>
            <p>
                فقط در این مجموعه
            </p>
        </div>
        <div>
            <img src="svg/happy.svg" alt="">
            <h3>بهترین مکان برای تفریح</h3>
            <p>
                داشتن لحظات خوش با خانواده و دوستان
            </p>
        </div>
    </div>
</section>

<!-------------------->
<!---CARDS SECTION---->
<!-------------------->

<section class="cards-section">
    <h2 class="heading"><i class="bi bi-x-diamond-fill"></i> خدمات آنلاین  <i class="bi bi-x-diamond-fill"></i></h2>
    <div class="content">
        <!-- card -->
        <div class="card">

            <div class="icon"><img src="svg/horse-riding.svg" alt=""></div>
            <p class="title">رزرو اسب سواری</p>
            <p class="text">لورم ایپسوم متن ساختگی با تولید
                سادگی نامفهوم از صنعت </p>

        </div>
        <!-- end card -->
        <!-- card -->
        <div class="card">

            <div class="icon"><img src="svg/food-serving.svg" alt=""></div>
            <p class="title">سفارش آنلاین غذا</p>
            <p class="text">لورم ایپسوم متن ساختگی با تولید
                سادگی نامفهوم از صنعت </p>

        </div>
        <!-- end card -->
        <!-- card -->
        <div class="card">

            <div class="icon"><img src="svg/tea.svg" alt=""></div>
            <p class="title">رزرو چایخانه سنتی</p>
            <p class="text">لورم ایپسوم متن ساختگی با تولید
                سادگی نامفهوم از صنعت </p>

        </div>
        <!-- end card -->
        <!-- card -->
        <div class="card">

            <div class="icon"><img src="svg/wedding-arch.svg" alt=""></div>
            <p class="title">رزرو تالار</p>
            <p class="text">لورم ایپسوم متن ساختگی با تولید
                سادگی نامفهوم از صنعت </p>

        </div>
        <!-- end card -->

    </div>
</section>

<!---------------------->
<!---GALLERY SECTION---->
<!---------------------->

<section class="gallery-section">
    <h2 class="heading"><i class="bi bi-x-diamond-fill"></i> گالری تصاویر  <i class="bi bi-x-diamond-fill"></i></h2>
    <div class="gallery">
        <div class="swiper-container gallery-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="lazy" data-src="image/food.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/restaurant.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/table.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/slider2.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/talar.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/slider4.jpg" alt="" loading="lazy"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="lazy" data-src="image/food.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/restaurant.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/table.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/slider2.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/talar.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide"><img class="lazy" data-src="image/slider4.jpg" alt="" loading="lazy"></div>
            </div>
        </div>
    </div>
    <button type="button" class="button">مشاهده گالری</button>
</section>

<!-------------------->
<!---ABOUT SECTION---->
<!-------------------->

<section class="about-section">
    <div class="logo-container js--wp-4"><img src="image/logo.png" alt=""></div>
    <div class="about-text js--wp-3">
        <h2 class="heading"><i class="bi bi-x-diamond-fill"></i> درباره ما  <i class="bi bi-x-diamond-fill"></i></h2>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
        <button type="button" class="button">بیشتر</button>
    </div>
</section>

<!---------------------->
<!---ADDRESS SECTION---->
<!---------------------->

<section class="contact-section js--wp-5">

    <div class="address-text ">
        <h2 class="heading"><i class="bi bi-x-diamond-fill"></i> آدرس و ارتباط با ما  <i class="bi bi-x-diamond-fill"></i></h2>
        <p><i class="bi bi-geo-alt-fill"></i> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
        <div class="phone-e">
            <p><i class="bi bi-telephone-fill"></i> email@email.com</p>
            <p><i class="bi bi-envelope-fill"></i> 021--------</p>
        </div>
    </div>

    <div class="map">
        <!--map-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25890.466883234883!2d51.46280855009234!3d35.79236248076869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e05cf1c9926fb%3A0xc58ba8d85bd5c309!2z2YLbjNi32LHbjNmH2Iwg2YXZhti32YLZhyDbsdiMINiq2YfYsdin2YbYjCDYp9iz2KrYp9mGINiq2YfYsdin2YY!5e0!3m2!1sfa!2s!4v1619776630332!5m2!1sfa!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</section>

<!--------------------->
<!---    FOOTER    ---->
<!--------------------->

<footer>
    <div class="footer">
        <div class="footer-logo">
            <img src="image/logo.png" alt="">
            <div class="footer-about">
                <p><i class="bi bi-geo-alt-fill"></i> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
                <div class="phone-e">
                    <p><i class="bi bi-envelope-fill"></i> email@email.com</p>
                    <p><i class="bi bi-telephone-fill"></i> 021--------</p>
                </div>
            </div>
        </div>
        <div class="footer-links">
            <div class="footer-main">
                <p class="heading"><i class="bi bi-x-diamond-fill"></i>صفحات اصلی</p>
                <ul>
                    <li><a href="#">صفحه اصلی</a></li>
                    <li><a href="#">گالری</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">ارتباط با ما</a></li>
                </ul>
                <p>شبکه های اجتماعی</p>
                <ul class="social-icons">
                    <li><a class="instagram" href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a class="whatsapp" href="#"><i class="bi bi-whatsapp"></i></a></li>
                    <li><a class="telegram" href="#"><i class="bi bi-telegram"></i></a></li>
                </ul>
            </div>
            <div class="footer-reserve">
                <p class="heading"><i class="bi bi-x-diamond-fill"></i>رزرو و سفارش آنلاین</p>
                <ul>
                    <li><a href="#">سفارش غذا</a></li>
                    <li><a href="#">رزرو اسب سواری</a></li>
                    <li><a href="#">رزرو چایخانه</a></li>
                    <li><a href="#">ررزو تالار</a></li>
                </ul>
                <button type="button" class="button">ثبت نام/ورود</button>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div>طراحی سایت: <a href="https://www.instagram.com/yashar.a.afshar/" target="_blank"> yashar.a.afshar <i class="bi bi-instagram"></i></a>
            <a href="https://www.instagram.com/avowebdesign/" target="_blank"> avowebdesign <i class="bi bi-whatsapp"></i></a> 09021408182 <i class="bi bi-instagram"></i>
        </div>

        <div>
            توسعه سایت:
        </div>

    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
