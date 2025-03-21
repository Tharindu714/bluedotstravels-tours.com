<!DOCTYPE html>
<html>
<?php
session_start();
require "connection.php";

if (isset($_SESSION["Aduser"])) {
    $data = $_SESSION["Aduser"];

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Blue Dots Travel</title>

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
                                <span><b>Welcome </b>
                                <?php echo $data["fname"] . " " . $data["lname"]; ?>
                                </span>
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
                                <span id="adminEmail">bluedotstravelandtours@aol.com</span>
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
                                <li class="active"><a href="Manageusers.php">Manage Users</a></li>
                                <li class="active"><a href="Manageproduct.php">Manage Bookings</a></li>
                                <li class="active"><a onclick="ADsignout();" style="cursor: pointer;">Sign Out</a></li>
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

        <script src="js/retina.js"></script> <!-- Retina js -->
        <script src="js/retina.min.js"></script> <!-- Retina js -->

</body>

</html>

<?php
} else {
  header("location:adminSignin.php");
}
?>