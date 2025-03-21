<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin SignIn - Blue Dots Travel</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/logo-icon.png">

    <!-- Necessary CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS Only GRID -->
    <link rel="stylesheet" href="css/google-font.css"> <!-- Google Font Icon -->
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet"> <!-- Google Font Allura-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <!-- Google Font  Montserrat-->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/swiper.min.css"> <!-- Swiper slider -->
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css"> <!-- Video background -->
    <link rel="stylesheet" href="css/template.css"> <!-- Template CSS -->
    <link rel="stylesheet" href="css/animate.css"> <!-- Wow Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css" /> <!-- Tab to accordian CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" /> <!-- jquery-ui for date picker and time-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Wrapper -->
    <div class="site-wrapper">

        <!-- Top Bar -->
        <div class="site-top-bar">

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- Left section -->
                        <div class="site-top-bar-left-section">

                            <!-- Link -->
                            <a>
                                <!-- Font awesome icon -->
                                <i class="fa fa-clock-o"></i>
                                <!-- Text -->
                                <span>Mon to Sat : 08:00 - 15:30</span>
                            </a>

                        </div>
                        <!-- End Left Section -->


                        <!-- Right Section -->
                        <div class="site-top-bar-right-section">

                            <!-- Link -->
                            <a href="tel:+94772805595">
                                <!-- Icon -->
                                <i class="fa fa-phone"></i>
                                <!-- Text -->
                                <span>+94 772805595</span>
                            </a>

                            <!-- Link -->
                            <a href="mailto:bluedotstravelandtours@aol.com">
                                <!-- Icon -->
                                <i class="fa fa-envelope"></i>
                                <!-- Text -->
                                <span>bluedotstravelandtours@aol.com</span>
                            </a>

                        </div>
                        <!-- End Right Section -->

                    </div>
                </div>
            </div>
            <!-- End Bootstrap -->

        </div>
        <!-- End Top Bar -->

        <!-- Header -->
        <header class="site-header" id="sticky-header">

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- Logo -->
                        <div class="site-logo">
                            <!-- Link -->
                            <a href="index.php">
                                <!-- Logo Image -->
                                <img src="images/logo-icon.png" alt="Logo">
                            </a>
                        </div>
                        <!-- End logo -->

                        <!-- Navigation Toggle Button -->
                        <div class="site-nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- End Nav Toggle Button -->

                        <!-- Navigation -->
                        <nav class="site-nav">
                            <ul>
                                <!-- Active Item (Use the active class) -->
                                <li class="active"><a href="#aboutus">About us</a></li>
                                <li><a href="#signUpBox">Admin Login</a></li>
                            </ul>
                        </nav>
                        <!-- End Navigation -->

                    </div>
                </div>
            </div>

            <!-- modal -->
            <div class="modal" tabindex="-1" id="veriFicationModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-black">
                            <h5 class="modal-title title2 fs-4 text-warning text-uppercase">Admin Verification
                            </h5>
                            <button type="button"
                                class="btn-close bg-white fw-bold fs-5 title1 border border-2 border-info text-dark"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body main-body">
                            <label class="form-label title2 fs-5 text-light">Enter Your Verification Codee</label>
                            <input type="text"
                                class="form-control text-light fw-bold title2 fs-6 border border-2 border-light bg-transparent"
                                id="vCode" />
                        </div>
                        <div class="modal-footer bg-black">
                            <button type="button"
                                class="btn bg-transparent text-light fw-bold fs-5 title2 text-uppercase"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button"
                                class="btn bg-transparent text-warning fw-bold fs-5 title2 text-uppercase"
                                onclick="verify();">Verify</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
            <!-- End Bootstrap -->

        </header>
        <!-- End Header -->



        <!-- Main Slider -->
        <div class="site-main-slider slider-version-1">

            <!-- Sequence slider -->
            <div id="sequence">
                <ul class="seq-canvas">
                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg.jpg)"></div>

                        <!-- Caption -->
                        <div class="sequence-caption">

                            <!-- Bootstrap -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">

                                        <!-- H2 heading -->
                                        <h2>Welcome to</h2>
                                        <!-- H1 Heading -->
                                        <h1>Blue Dots Travel</h1>

                                        <div class="elements"> </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>

                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg3.jpg)"></div>

                        <!-- Caption -->
                        <div class="sequence-caption">

                            <!-- Bootstrap -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h1>Feel The Beauty Of Nature</h1>
                                        <!-- Paragraph -->
                                        <div class="row">
                                        </div>
                                        <!-- Button -->
                                        <!-- elements -->
                                        <div class="elements"> </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>

                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg4.jpg)"></div>

                        <!-- Caption -->
                        <div class="sequence-caption">

                            <!-- Bootstrap -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">

                                        <h1>Zipline Adventures</h1>
                                        <div class="elements"> </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>


                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg6.jpg)"></div>

                        <!-- Caption -->
                        <div class="sequence-caption">

                            <!-- Bootstrap -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!-- H1 Heading -->
                                        <h1>Indoor Extreme Climbing</h1>
                                        <div class="elements"> </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>

                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg8.jpg)"></div>

                        <!-- Caption -->
                        <div class="sequence-caption">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h1>Wonderful Nature Experience</h1>
                                        <div class="elements"> </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>

                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg10.jpg)"></div>
                        <!-- Caption -->
                        <div class="sequence-caption">

                            <!-- Bootstrap -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h1>Amazing Riding Activities</h1>
                                        <div class="elements"> </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>

                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg5.jpg)"></div>
                        <!-- Caption -->
                        <div class="sequence-caption">

                            <!-- Bootstrap -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>

                    <li class="sequence-slide">

                        <!-- Background Image -->
                        <div class="sequence-bg" style="background-image: url(images/posterimg7.jpg)"></div>
                        <!-- Caption -->
                        <div class="sequence-caption">

                            <!-- Bootstrap -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h1>More Interesting Activities</h1>
                                        <div class="elements"> </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End bootstrap -->

                        </div>
                        <!-- End caption -->
                    </li>


                </ul>
            </div>

            <!-- Pagination -->
            <ul class="seq-pagination">
                <li>Step 1</li>
                <li>Step 2</li>
                <li>Step 3</li>
                <li>Step 4</li>
                <li>Step 5</li>
                <li>Step 6</li>
            </ul>

            <!-- Navigation -->
            <button type="button" class="seq-prev"><span class="icon-slider-arrow-left"></span></button>
            <button type="button" class="seq-next"><span class="icon-slider-arrow-right"></span></button>

        </div>
        <!-- End Slider -->

        <!-- About us -->
        <div id="aboutus" class="site-about site-dark-section-a">
            <div class="about-element-1 wow fadeInDown" data-wow-duration="2s"> <img src="images/about-elements-1.png"
                    alt="about-elements1">
            </div>
            <div class="about-element-2 wow swing" data-wow-duration="8s"> <img src="images/about-elements-2.png"
                    alt="about-elements2">
            </div>
            <div class="about-element-3 wow rotateInDownRight" data-wow-duration="3s"> <img
                    src="images/about-elements-3.png" alt="about-elements3">
            </div>
            <div class="about-element-4 wow zoomIn" data-wow-duration="4s"> <img src="images/about-elements-4.png"
                    alt="about-elements4">
            </div>
            <!-- Bootstrap -->
            <div class="container">
                <div class="row">

                    <!-- About -->
                    <div class="site-about-main">

                        <!-- Left colom -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                            <!-- H2 Heading -->
                            <h2>Our story</h2>
                            <!-- H1 Heading -->
                            <h1>About us</h1>

                            <div class="site-about-box">
                                <span>We are the bluedottravels.lk &trade; Savour the unique experince this island
                                </span>
                                <p>Blue Dots Travel And Tours is a tour company that designs
                                    Adventure tours for clients looking to experience the best of Sri Lanka.
                                    Blue Dots Travel And Tours is a very well-established brand and is
                                    well-known in the Sri Lanka tourism industry.
                                    Join with us today to See What is waiting for you on your next island gateway</p>
                            </div>

                            <!-- features list -->
                            <section class="feature-box-main">
                                <div class="align-center">
                                    <!-- BUTTON 1 -->
                                    <a href="">
                                        <!-- FIGURE -->
                                        <figure> <img src="images/feature1.png" alt="feature1"> </figure>
                                        <!-- h5 -->
                                        <h5>Friendly Service</h5>
                                    </a>

                                    <!-- BUTTON 2 -->
                                    <a href="" class="feature-icon">
                                        <!-- FIGURE -->
                                        <figure> <img src="images/feature2.png" alt="feature2"> </figure>
                                        <!-- h5 -->
                                        <h5>Wonderful experince</h5>
                                    </a>

                                    <!-- BUTTON 3 -->
                                    <a href="" class="feature-icon">
                                        <!-- FIGURE -->
                                        <figure> <img src="images/feature3.png" alt="feature3"> </figure>
                                        <!-- h5 -->
                                        <h5>24 hours support</h5>
                                    </a>

                                </div>
                            </section>
                        </div>
                        <!-- End Left colom -->

                        <!-- Right colom -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="right">
                                <figure> <img src="images/about-chef.png" alt="chef"> </figure>
                            </div>
                        </div>
                        <!-- End Right colom -->

                        <!-- End About -->
                    </div>
                </div>
                <!-- End Bootstrap -->

            </div>
        </div>
        <!-- End About us -->
        <div class="main-body">

            <div class="container-fluid vh-100 d-flex justify-content-center">
                <div class="row align-content-center">

                    <!-- header -->
                    <!-- header -->

                    <!-- content -->

                    <div class="col-12 p-3">
                        <div class="row">

                            <div class="col-5 d-none d-lg-block background"></div>
                            <div class="col-12 col-lg-7" id="signUpBox">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <p class="title2 fw-bold text-light fs-2 text-uppercase">SIGN IN TO YOUR ACCOUNT
                                        </p>
                                    </div>
                                    <br>
                                    <div class="col-12 d-none" id="msgdiv">
                                        <div class="alert alert-danger" role="alert" id="alertdiv">
                                            <i class="bi bi-x-octagon-fill fs-5" id="msg">

                                            </i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-warning fs-6 text-uppercase">Email</label>
                                        <input type="email"
                                            class="form-control text-light bg-dark title2 fs-6 border border-2 border-warning"
                                            id="e" placeholder="Enter Your Valid Email" />
                                    </div>
                                    <div class="col-12 col-lg-10 col-xl-6 d-grid">
                                        <button class="btn bg-transparent text-warning fw-bold fs-5 text-uppercase"
                                            onclick="adminVerification();">Send Verification code</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                    <!-- footer -->

                    <div class="col-12 fixed-bottom d-none d-lg-block">
                        <p class="text-center fw-bold text-light ">&copy; 2023 bluedostravels.lk || All Right Reserved
                        </p>
                    </div>

                    <!-- footer -->

                </div>

            </div>

            <script src="main.js"></script>
            <script src="bootstrap.js"></script>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery-1.12.4.min.js"></script>

            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/wow.min.js"></script> <!--Wow animation js -->
            <script src="js/scrollspy.js"></script> <!--Wow animation repeat js -->

            <script src="js/jquery.countimator.min.js"></script> <!-- Counter -->
            <script src="js/jquery.sticky.min.js"></script> <!-- Sticky Header -->
            <script src="js/swiper.jquery.min.js"></script> <!-- Carousel Slider -->
            <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope -->
            <script src="js/jquery.tabslet.min.js"></script> <!-- Tabs -->
            <script src="js/tweetie.min.js"></script> <!-- Tweets -->
            <script src="js/jquery.scrollUp.min.js"></script> <!-- Scroll up -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqv7qQuTFyzA7Pgs9SSAOBIOMLI8iiems"></script>
            <!-- Google map -->
            <script src="js/imagesloaded.pkgd.min.js"></script> <!-- Header slider scripts -->
            <script src="js/hammer.min.js"></script>
            <script src="js/sequence.min.js"></script>
            <script src="js/venobox.min.js"></script> <!-- Light box -->
            <script src="js/jquery.mb.YTPlayer.min.js"></script> <!-- Video background -->
            <script src="js/template.js"></script> <!-- Theme Options -->
</body>

</html>