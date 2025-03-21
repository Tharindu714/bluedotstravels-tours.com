<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="One Page Corporate HTML Template">
    <meta name="author" content="">
    <link rel="icon" href="images/logo-icon.png">

    <!-- Title -->
    <title>Blue dots Travel</title>

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
                            <?php
                            session_start();

                            if (isset($_SESSION["user"])) {
                                $data = $_SESSION["user"];

                            ?>
                                <!-- Link -->
                                <a>
                                    <!-- Font awesome icon -->
                                    <i class="fa fa-clock-o"></i>
                                    <!-- Text -->
                                    <span><b>Welcome </b>
                                        <?php echo $data["fname"] . " " . $data["lname"]; ?>
                                    </span>
                                <?php
                            }
                                ?>
                                <i class="fa fa-clock-o"></i>
                                <span onclick="signout();" style="cursor: pointer;">Sign OUT</span>
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
                                <li class="active"><a href="#sequence">Home</a></li>
                                <li><a href="#aboutus">About us</a></li>
                                <li><a href="signup.php">Sign Up</a></li>
                                <li><a href="profile.php">My Profile</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contactus">Contact</a></li>
                                <li><a href="#popularmenu">Book Now</a></li>
                                <li><a href="#book-table">Feedbacks</a></li>
                            </ul>
                        </nav>
                        <!-- End Navigation -->

                    </div>
                </div>
            </div>
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
            <div class="about-element-1 wow fadeInDown" data-wow-duration="2s"> <img src="images/about-elements-1.png" alt="about-elements1">
            </div>
            <div class="about-element-2 wow swing" data-wow-duration="8s"> <img src="images/about-elements-2.png" alt="about-elements2">
            </div>
            <div class="about-element-3 wow rotateInDownRight" data-wow-duration="3s"> <img src="images/about-elements-3.png" alt="about-elements3">
            </div>
            <div class="about-element-4 wow zoomIn" data-wow-duration="4s"> <img src="images/about-elements-4.png" alt="about-elements4">
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

        <!-- Popular Menu -->
        <div id="popularmenu" class="site-popularmenu site-dark-section-a">

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">

                    <!-- popularmenu -->
                    <div class="site-popularmenu-main">

                        <!-- H2 Heading -->
                        <h2>Our Popular</h2>
                        <!-- H1 Heading -->
                        <h1>Cycling categories</h1>

                        <!-- popularmenu 1 -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box">
                                <!-- image -->
                                <figure> <img src="images/popular1.jpg" alt="popular"> </figure>
                                <div class="content">
                                    <!-- price -->
                                    </br>
                                    <!-- heading -->
                                    <h4> Cycle Riding - family </h4>
                                    <!-- description -->
                                    <p>Tomato, fresh milk, potatos Lorem Ipsum is simply dummy text
                                    </p>
                                    <!-- Button -->
                                    <a href="contact.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"> </i>
                                    </a>
                                </div>
                                <!-- corner image -->
                            </div>
                        </div>

                        <!-- popularmenu 2 -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box">
                                <!-- image -->
                                <figure> <img src="images/popular2.jpg" alt="popular"> </figure>
                                <div class="content">
                                    <!-- price -->
                                    </br>
                                    <!-- heading -->
                                    <h4> Cycle Riding - Couple </h4>
                                    <!-- description -->
                                    <p>Tomato, fresh milk, potatos Lorem Ipsum is simply dummy text
                                    </p>
                                    <!-- Button -->
                                    <a href="contact.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"> </i>
                                    </a>
                                </div>
                                <!-- corner image -->

                            </div>
                        </div>

                        <!-- popularmenu 3 -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box">
                                <!-- image -->
                                <figure> <img src="images/popular3.jpg" alt="popular"> </figure>
                                <div class="content">
                                    <!-- price -->
                                    </br>
                                    <!-- heading -->
                                    <h4> Cycle Riding </h4>
                                    <!-- description -->
                                    <p>Tomato, fresh milk, potatos Lorem Ipsum is simply dummy text
                                    </p>
                                    <!-- Button -->
                                    <a href="contact.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"> </i>
                                    </a>
                                </div>
                                <!-- corner image -->

                            </div>
                        </div>
                    </div>

                    <div class="site-popularmenu-main">
                        <!-- H2 Heading -->
                        <h2>our popular</h2>
                        <!-- H1 Heading -->
                        <h1>Adventure categories</h1>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box">
                                <!-- image -->
                                <figure> <img src="images/popular4.jpg" alt="popular"> </figure>
                                <div class="content">
                                    <!-- price -->
                                    </br>
                                    <!-- heading -->
                                    <h4>Adventure Tour - family </h4>
                                    <!-- description -->
                                    <p>Tomato, fresh milk, potatos Lorem Ipsum is simply dummy text
                                    </p>
                                    <!-- Button -->
                                    <a href="contact.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"> </i>
                                    </a>
                                </div>
                                <!-- corner image -->
                            </div>
                        </div>

                        <!-- popularmenu 2 -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box">
                                <!-- image -->
                                <figure> <img src="images/popular5.jpg" alt="popular"> </figure>
                                <div class="content">
                                    <!-- price -->
                                    </br>
                                    <!-- heading -->
                                    <h4>Adventure Tour-Couple</h4>
                                    <!-- description -->
                                    <p>Tomato, fresh milk, potatos Lorem Ipsum is simply dummy text
                                    </p>
                                    <!-- Button -->
                                    <a href="contact.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"> </i>
                                    </a>
                                </div>
                                <!-- corner image -->

                            </div>
                        </div>

                        <!-- popularmenu 3 -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box">
                                <!-- image -->
                                <figure> <img src="images/popular6.jpg" alt="popular"> </figure>
                                <div class="content">
                                    <!-- price -->
                                    </br>
                                    <!-- heading -->
                                    <h4>Adventure Tour</h4>
                                    <!-- description -->
                                    <p>Tomato, fresh milk, potatos Lorem Ipsum is simply dummy text
                                    </p>
                                    <!-- Button -->
                                    <a href="contact.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"> </i>
                                    </a>
                                </div>
                                <!-- corner image -->

                            </div>
                        </div>
                    </div>
                    <!-- End Bootstrap -->
                </div>
            </div>
            <!-- End Popular Menu -->

            <!-- Book Table -->
            <div id="book-table" class="site-book-table site-dark-section-a">
                <div class="book-table-element-1 wow swing" data-wow-duration="8s"> <img src="images/book-table-element-1.png" alt="book-table-element1">
                </div>
                <div class="book-table-element-2 wow slideInRight" data-wow-duration="3s"> <img src="images/book-table-element-2.png" alt="book-table-element2">
                </div>

                <!-- Bootstrap -->
                <div class="container">
                    <div class="row">
                        <div class="main">
                            <!-- H2 Heading -->
                            <h2>Put Your Valuable</h2>
                            <!-- H1 Heading -->
                            <h1>Feedback</h1>
                            <?php
                        
                            if (isset($_SESSION["user"])) {
                                $data = $_SESSION["user"];

                            ?>
                                <!-- Content -->
                                <div class="form-box">
                                    <div class="inner">
                                        <!-- Appointment form -->
                                        <form method="post" id="apointmentform" class="site-apointment-form">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <!-- Name -->
                                                <label><input type="text" name="contact_name" id="Name" placeholder="Name" required="required"></label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <!-- Date -->
                                                <label><input type="text" name="date" id="date" value="" placeholder="When do you went" /></label>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <!-- Time -->
                                                <label><input type="text" name="type" id="type" placeholder="What type of tour" required="required"></label>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <!-- Message -->
                                                <label><textarea name="charset" id="feedback" placeholder="Leave your Feedback here (minimum 200 characters)" required="required" rows="5"></textarea></label>
                                                <!-- Submit -->
                                                <br>
                                            </div>

                                            <div class="bg-black text-light" onclick="feedbackpro();" style="cursor: pointer;">Submit Feedback <i class="fa fa-arrow-right">
                                                </i></div>
                                        </form>
                                        <div class="col-12 d-none" id="addmsgdiv">
                                            <div class="alert alert-success" role="alert" id="addalertdiv">
                                                <i class="bi bi-check2-circle fs-5" id="addmsg">

                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            } else {
                                echo("Please SignIn and leave your Valuable Feedback");
                            }

                            ?>
                        </div>
                    </div>

                </div>
                <!-- End Bootstrap -->

            </div>
            <!-- End Book Table -->

            <!-- Testimonial -->
            <div id="testimonial" class="site-testimonial site-dark-section-a">


            </div>
            <!-- End bootstrap -->

        </div>
        <!-- End testimonial -->

        <!-- Gallery -->
        <div id="gallery" class="site-portfolio site-dark-section-a">
            <div class="gallery-element-1 wow fadeInDown" data-wow-duration="2s"> <img src="images/gallery-elements-1.png" alt="gallery-elements1">
            </div>
            <div class="gallery-element-2 wow fadeInDown" data-wow-duration="3s"> <img src="images/gallery-elements-2.png" alt="gallery-elements2">
            </div>
            <div class="gallery-element-3 wow rotateInDownRight" data-wow-duration="3s"> <img src="images/gallery-elements-3.png" alt="gallery-elements3">
            </div>

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="site-portfolio-main">

                            <!-- H2 Heading -->
                            <h2>Special Events</h2>
                            <!-- H1 Heading -->
                            <h1>Gallery</h1>

                            <!-- Tabs Buttons -->
                            <ul class="site-portfolio-tabs">

                                <!-- Active Item -->
                                <li class="active" data-filter="all">All</li>
                                <li data-filter="desert">Adventure</li>
                                <li data-filter="lunch">Riding Event</li>
                            </ul>

                            <!-- Bootstrap inner row -->
                            <div class="row">

                                <!-- Tabs Content -->
                                <div class="site-portfolio-tabs-content">
                                    <!-- Certification -->
                                    <div class="all portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb14.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big13.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Celebrating Our Story</h5> <!-- heading -->
                                                <h6>Hilton Reunion</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb15.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big14.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>HouseKeeping & Laundry Week</h5> <!-- heading -->
                                                <h6>2011 International Hilton Colombo</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb16.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big15.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>The 11th IIFA Weekend</h5> <!-- heading -->
                                                <h6>Cinnomon Grand Colombo</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb17.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big16.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Other Certifications</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Certification End-->
                                    <!-- Adventure Tour -->
                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb1.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big1.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Adventure Activities</h5> <!-- heading -->
                                                <h6>@ Flying Ravana Adventure Park</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb2.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big2.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Zipline Adventures</h5> <!-- heading -->
                                                <h6>@ Flying Ravana Adventure Park</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb3.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big3.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Zipline Adventures</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb4.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big4.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Zipline Adventures</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb5.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big5.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Zipline Adventures</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb6.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big6.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Zipline Adventures</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb7.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big7.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Zipline Adventures</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb8.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big8.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Adventure Tours</h5> <!-- heading -->
                                                <h6>@ Flying Ravana Adventure Park</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb9.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big9.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Adventure Tours</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb10.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big10.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Challanging Activities</h5> <!-- heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb11.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big11.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Shooting Events</h5> <!-- heading -->
                                                <h6>@Bella Lanka Tours</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all desert portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb13.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big12.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Zipline Tours</h5> <!-- heading -->
                                                <h6>@bella Lanka Tours</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Adventure Tour -->

                                    <!--Riding Events-->
                                    <div class="all lunch portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb12.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big12.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Riding Events</h5> <!-- heading -->
                                                <h6>@ Bella lanka Tours</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all lunch portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb18.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big17.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Riding Events</h5> <!-- heading -->
                                                <h6>@ Bella lanka Tours</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all lunch portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="images/gallery-images/thumb19.jpg" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="images/gallery-images/big18.jpg" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5>Riding Events</h5> <!-- heading -->
                                                <h6>@ Bella lanka Tours</h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Riding Events-->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bootstrap -->
        </div>
    </div>
    <!-- End Gallery -->

    <!-- contact us -->
    <div id="contactus" class="site-contact site-dark-section-b">

        <!-- Bootstrap -->
        <div class="container ">
            <div class="row">

                <!-- Contact -->
                <div class="site-contact-main">

                    <div class="site-contact-box">
                        <!-- Left colom -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="inner">
                                <!-- H2 Heading -->
                                <h2>Contact us</h2>
                                <!-- H1 Heading -->
                                <h1>Reach to us</h1>

                                <!-- Hours -->
                                <!-- H4 Heading -->
                                <h4>Opening hours</h4>

                                <!-- Time Row -->
                                <div class="time-row">
                                    <p>Mon - Fri </p>
                                    <span class="time">8.00 am to 10.00 pm </span>
                                </div>

                                <!-- Time Row -->
                                <div class="time-row bottom-space">
                                    <p>Sat - Sun</p>
                                    <span class="time">8.00 am to 12.00 pm </span>
                                </div>


                                <!-- Contact -->
                                <!-- H4 Heading -->
                                <h4>Contact info</h4>

                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p><i class="fa fa-map-marker"></i> Ella, Sri Lanka
                                    </p>
                                </div>

                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p><i class="fa fa-phone-square"></i> +94 772805595 </p>
                                </div>

                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p><i class="fa fa-envelope"></i>
                                        bluedotstravelandtours@aol.com</p>
                                </div>


                            </div>
                        </div>

                        <!-- Right colom -->
                        <!-- Google map show using API -->
                        <iframe class="col-lg-6 col-xs-12 d-none d-lg-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.6017305408254!2d81.06075940538804!3d6.866205249072493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae465767f6c6707%3A0x4a975162cb36da71!2sFlying%20Ravana%20Mega%20Zipline!5e0!3m2!1sen!2slk!4v1692695262319!5m2!1sen!2slk" width="530" height="600" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- End Left colom -->

                </div>

                <!-- End About -->
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End contact us -->


    <!-- Footer -->
    <footer class="site-footer site-subscribe-main site-dark-section-a">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <!-- Widget -->
                    <div class="widget">

                        <!-- H2 Heading -->
                        <h2>Connect With Us On</h2>
                        <!-- H1 Heading -->
                        <h1>Socail Media</h1>

                    </div>
                    <!-- End widget -->

                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    <!-- Social Icons -->
                    <div class="site-social-icons">
                        <a target="_blank" href="https://www.facebook.com/Bluedotstravelandtours?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://wa.me/message/RVAOYYGRUFR7C1"><i class="fa fa-whatsapp"></i></a>
                        <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g616035-d26347835-Reviews-Blue_Dots_Travel_And_Tours-Ella_Uva_Province.html"><i class="fa fa-tripadvisor"></i></a>
                        <a target="_blank" href="https://www.instagram.com/bluedotstravelandtours/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://web.telegram.org/a/#6195872455"><i class="fa fa-send"></i></a>
                    </div>

                    <!-- Copyright -->
                    <div class="site-copyright">
                        <a href="#" target="_blank">TCSoft (pvt) Ltd</a>
                    </div>
                </div>


            </div>

        </div>
        <!-- End Bootstrap -->

    </footer>
    <!-- End Footer -->

    <!-- Preloader -->
    <div class="site-preloader">
        <img src="images/loader.gif" alt="loader">
    </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="main.js"></script>

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

    <script src="js/retina.js"></script> <!-- Retina js -->
    <script src="js/retina.min.js"></script> <!-- Retina js -->

    <script src="js/jquery-ui.js"></script> <!-- jquery-ui for date picker and time -->

    <script src="js/easyResponsiveTabs.js"></script> <!-- Tab to accordian -->
    <script>
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

        });
    </script>


    <script>
        $('#date').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    </script>


</body>


</html>