<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Profile - Blue Dots Travel</title>

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
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="signup.php">Sign Up</a></li>
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
                    <div class="main-body">

          <div class="container-fluid main-body">
            <div class="row">

              <?php
              require "connection.php";
              $email = $_SESSION["user"]["email"];

              $details_resultSet = Database::search("SELECT * FROM `user` INNER JOIN `gender` ON 
        gender.id=user.gender_id WHERE `email`= '" . $email . "';");

              $img_resultSet = Database::search("SELECT*FROM `profile_image` WHERE `user_email`='" . $email . "';");

              $addr_resultSet = Database::search("SELECT*FROM `user_has_address`
        INNER JOIN `city` ON user_has_address.city_id=city.id
        INNER JOIN `district` ON city.district_id=district.id
        INNER JOIN `province`ON district.province_id=province.id WHERE `user_email`='" . $email . "';");

              $data = $details_resultSet->fetch_assoc();
              $imgdata = $img_resultSet->fetch_assoc();
              $addrdata = $addr_resultSet->fetch_assoc();


              ?>

                <div class="col-12 bg-warning">
                  <div class="row">

                    <div class="col-12 main-body rounded mt-4 mb-4">
                      <div class="row g-2">
                      <hr class=" border border-light" />
                        <div class="col-md-3 border-end">
                          <div class="d-flex flex-column align-items-center text-center p-3 py-5">


                            <?php

                            if (empty($imgdata["path"])) {
                              ?>
                                      <img src="Royal logo.jpg" id="viewimg" class="rounded-circle mt-5" style="width:150px ;" />
                                    <?php

                            } else {
                              ?>
                                      <img src="<?php echo $imgdata["path"]; ?>" id="viewimg" class="rounded-circle mt-5" style="width:150px ;" />
                                    <?php

                            }
                            ?>
                            <span class="fw-bold text-light title2 fs-4"><?php echo $data["fname"] . " " . $data["lname"]; ?></span>
                            <span class="fw-bold text-warning title2 fs-6"><?php echo $email; ?></span>

                            <input type="file" class="d-none" id="profileimg" accept="image/*" />
                            <label for="profileimg" class="btn text-light bg-transparent fw-bold fs-5 text-uppercase mt-5 border border-2 rounded-5 border-warning" onclick="changeimg();">Change Profile Image</label>

                          </div>
                        </div>

                        <div class="col-md-5 border-end bg-black">
                          <div class="p-3 py-5">

                            <div class="d-flex justify-content-between align-align-items-center mb-3">
                              <h4 class="fw-bold text-warning title1 fs-1">Profile Settings</h4>
                            </div>

                            <div class="row mt-4">

                              <div class="col-6">
                                <label class="form-label text-light fw-bold text-uppercase">First Name</label>
                                <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" value="<?php echo $data["fname"]; ?>" id="fname" />
                              </div>

                              <div class="col-6">
                                <label for="" class="form-label text-light fw-bold text-uppercase">Last Name</label>
                                <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" value="<?php echo $data["lname"]; ?>" id="lname" />
                              </div>

                              <div class="col-12">
                                <label for="" class="form-label text-light fw-bold text-uppercase">Mobile</label>
                                <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" value="<?php echo $data["mobile"]; ?>" id="mob" />
                              </div>

                              <div class="col-12">
                                <label for="" class="form-label text-light fw-bold text-uppercase">Email</label>
                                <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-light" readonly value="<?php echo $data["email"]; ?>" />
                              </div>

                              <div class="col-12">
                                <label for="" class="form-label text-light fw-bold text-uppercase">Password</label>
                                <div class="input-group mb-3">
                                  <input type="password" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-light" value="<?php echo $data["password"]; ?>" readonly aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <span class="input-group-text text-light fs-4 border border-2 border-light bg-transparent" id="basic-addon2">
                                    <i class="bi bi-eye-slash-fill">
                                    </i>
                                  </span>
                                </div>
                              </div>

                              <div class="col-12">
                                <label for="" class="form-label text-light fw-bold text-uppercase">Registerd Date</label>
                                <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-light" readonly value="<?php echo $data["join_date"]; ?>" />
                              </div>

                              <?php
                              if (!empty($addrdata["line1"])) {
                                ?>
                                        <div class="col-12">
                                          <label class="form-label text-light fw-bold text-uppercase">Address Line 01</label>
                                          <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" value="<?php echo $addrdata["line1"]; ?>" id="add01" />
                                        </div>

                                      <?php
                              } else {
                                ?>

                                        <div class="col-12">
                                          <label for="" class="form-label text-light fw-bold text-uppercase">Address Line 01</label>
                                          <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" id="add01" />
                                        </div>

                                      <?php


                              }
                              if (!empty($addrdata["line2"])) {
                                ?>

                                        <div class="col-12 mt-1">
                                          <label for="" class="form-label text-light fw-bold text-uppercase">Address Line 02</label>
                                          <input type="text" value="<?php echo $addrdata["line2"]; ?>" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" id="add02"/>
                                        </div>

                                      <?php
                              } else {
                                ?>

                                        <div class= "col-12">
                                          <label class="form-label text-light fw-bold text-uppercase">Address Line 02</label>
                                          <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" id="add02" />
                                        </div>

                                      <?php
                              }

                              $province_resultSet = Database::search("SELECT * FROM `province`");
                              $district_resultSet = Database::search("SELECT * FROM `district`");


                              ?>

                              <div class="col-12">
                                <label class="form-label text-light fw-bold text-uppercase">Province</label>
                                <select class="form-control text-secondary bg-transparent title2 fs-6 border border-2 border-warning" id="province">
                                  <option value="0">Select Province</option>
                                  <?php
                                  $province_num = $province_resultSet->num_rows;
                                  for ($x = 0; $x < $province_num; $x++) {
                                    $province_data = $province_resultSet->fetch_assoc();
                                    ?>

                                            <option value="<?php echo $province_data["id"]; ?>" <?php
                                               if (!empty($addrdata["province_id"])) {

                                                 if ($province_data["id"] == $addrdata["province_id"]) {

                                                   ?>selected<?php }
                                               } ?>>

                                              <?php echo $province_data["province_name"]; ?></option>

                                          <?php
                                  }
                                  ?>
                                </select>
                              </div>

                              <div class="col-6">
                                <label for="" class="form-label text-light fw-bold text-uppercase">District</label>
                                <select class="form-control text-secondary bg-transparent title2 fs-6 border border-2 border-warning" id="district">
                                  <option value="0">Select District</option>
                                  <?php

                                  $district_num = $district_resultSet->num_rows;
                                  for ($x = 0; $x < $district_num; $x++) {
                                    $district_data = $district_resultSet->fetch_assoc();
                                    ?>

                                            <option value="<?php echo $district_data["id"]; ?>" <?php
                                               if (!empty($addrdata["district_id"])) {

                                                 if ($district_data["id"] == $addrdata["district_id"]) {

                                                   ?>selected<?php }
                                               } ?>>

                                              <?php echo $district_data["district_name"]; ?></option>

                                          <?php
                                  }
                                  ?>
                                </select>
                              </div>

                              <div class="col-6">
                                <label for="" class="form-label text-light fw-bold text-uppercase">City</label>
                                <select class="form-control text-secondary bg-transparent title2 fs-6 border border-2 border-warning" id="city">
                                  <option value="0">Select City</option>
                                  <?php
                                  $city_resultSet = Database::search("SELECT * FROM `city`");
                                  $city_num = $city_resultSet->num_rows;
                                  for ($x = 0; $x < $city_num; $x++) {
                                    $city_data = $city_resultSet->fetch_assoc();
                                    ?>

                                            <option value="<?php echo $city_data["id"]; ?>" <?php
                                               if (!empty($addrdata["city_id"])) {

                                                 if ($city_data["id"] == $addrdata["city_id"]) {

                                                   ?>selected<?php }
                                               } ?>>

                                              <?php echo $city_data["city_name"]; ?></option>

                                          <?php
                                  }
                                  ?>
                                </select>
                              </div>

                              <?php
                              if (!empty($addrdata["postal_code"])) {
                                ?>
                                        <div class="col-6">
                                          <label for="" class="form-label text-light fw-bold text-uppercase">Postal Code</label>
                                          <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-light" readonly id="postal" value="<?php echo $addrdata["postal_code"]; ?>" />
                                        </div>

                                      <?php
                              } else {
                                ?>

                                        <div class="col-6">
                                          <label for="" class="form-label text-light fw-bold text-uppercase">Postal Code</label>
                                          <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-warning" id="postal" />
                                        </div>

                                      <?php
                              }
                              if (!empty($data["gender_name"])) {
                                ?>

                                        <div class="col-6">
                                          <label for="" class="form-label text-light fw-bold text-uppercase">Gender</label>
                                          <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-light" readonly value="<?php echo $data["gender_name"]; ?>" />
                                        </div>

                                      <?php
                              } else {
                                ?>
                                        <div class="col-6">
                                          <label for="" class="form-label text-light fw-bold text-uppercase">Gender</label>
                                          <input type="text" class="form-control text-light bg-transparent title2 fs-6 border border-2 border-light" readonly />
                                        </div>

                                      <?php
                              }

                              ?>
                              <div class="col-12 d-grid mt-3">
                                <button class="btn btn-dark bg-transparent text-warning fw-bold fs-5 title1 border border-2 border-light text-uppercase" onclick="updatePro();">Update My Profile</button>
                              </div>

                            </div>

                          </div>
                        </div>

                        <hr class=" border border-light" />
                      </div>
                    </div>
            
                  </div>
          
                </div>
        
            </div>
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

                    <script src="js/retina.js"></script> <!-- Retina js -->
                    <script src="js/retina.min.js"></script> <!-- Retina js -->

            </body>
            <?php

                            } else {
                              header("location:signup.php");
                            }

                            ?>

</html>