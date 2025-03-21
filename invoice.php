<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

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

    <title>E- Bill for Your Booking </title>

    <link rel="icon" href="images/logo-icon.png">
</head>

<body class="main-body mt-2 bg-black">
    <!-- Top Bar -->
    <div class="site-top-bar">

        <!-- Bootstrap -->
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <!-- Left section -->
                            <div class="site-top-bar-left-section">
                                <?php
                                session_start();

                                if (isset($_SESSION["user"])) {
                                    $data = $_SESSION["user"];
                                    $umail = $_SESSION["user"]["email"];


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

            <div class="col-12" id="page">
                <div class="row">
                    <div class="col-6">
                        <div class="ms-5 invoiceheader-IMG"></div>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 text-warning text-decoration-underline text-end">
                                <h2 class="fw-bold">Blue Dots Travels & Tours</h2>
                            </div>
                            <div class="col-12 fw-bold text-end">
                                <span class="text-light fs-5">Ella, Sri Lanka</span><br />
                                <span class="text-light fs-5">+94 772805595</span><br />
                                <span class="text-light fs-5">bluedotstravelandtours@aol.com</span><br />
                            </div>
                        </div>
                    </div>

             <br>

                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fw-bold text-light">INVICE TO : </h5>
                                <?php
                                require "connection.php";
                                $address_rs = Database::search("SELECT * FROM `user_has_address` WHERE `user_email` = '" . $umail . "' ");
                                $address_data = $address_rs->fetch_assoc();
                                ?>
                                <h2 class="text-warning">
                                    <?php echo $_SESSION["user"]["fname"] . " " . $_SESSION["user"]["lname"]; ?>
                                </h2>
                                <span class="text-light fs-5 fw-bold">
                                    <?php echo $address_data["line1"] . " " . $address_data["line2"]; ?>
                                </span><br />
                                <span class="text-light fs-6 fw-bold">
                                    <?php echo $umail; ?>
                                </span>
                            </div>
                            <?php
                            $invoice_rs = Database::search("SELECT * FROM `contact` WHERE `user_email`='" . $umail . "' ORDER BY `date_time` DESC");
                            $invoice_data = $invoice_rs->fetch_assoc();
                            ?>
                            <div class="col-6 text-end mt-4">
                                <h1 class="text-light fw-bold">INVOICE NO:
                                    #
                                    <?php echo $invoice_data["code"]; ?>
                                </h1>
                            </div>
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                        <tr class="border border-1 border-light">
                                            <th class="fw-bold fs-4 text-warning">Tour Preferances</th>
                                            <th class="fw-bold fs-4 text-warning">Name</th>
                                            <th class="fw-bold fs-4 text-warning">Mobile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="height:70px;">
                                            <td class="text-light fs-6 fw-bold">
                                                <?php echo $invoice_data["detail"]; ?>
                                            </td>
                                            <td class="fw-bold fs-6 pt-4 bg-body text-black">
                                                <?php echo $_SESSION["user"]["fname"] . " " . $_SESSION["user"]["lname"]; ?>
                                            </td>
                                            <td class="fw-bold fs-6 text-light pt-4">
                                                <?php echo $_SESSION["user"]["mobile"]; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 btn-toolbar justify-content-end">
                                <button class="btn btn-dark me-2" onclick="printInvoice();"><i
                                        class="bi bi-file-fill"></i>
                                    Save as PDF</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 text-center" style="margin-top:100px;">
                    <span class="fs-4 fw-bold text-light">Take the Bill with you for sure</span>
                        <span class="fs-1 fw-bold text-warning">Thank you for your booking!</span>
                    </div>

                    <div class="col-12 border-start border-5 border-primary mt-3 mb-3 rounded"
                        style="background-color: #e7f2ff;">
                        <div class="row">
                            <div class="col-12 mt-3 mb-3">
                                <label class="form-label fw-bold text-danger fs-5">NOTICE :</label><br />
                                <label class="form-label text-uppercase fs-6">We will contact you very soon and make
                                    sure to keep this invoice with you</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="border border-1 border-primary" />
                    </div>

                    <div class="col-12 text-center mb-3">
                        <label class="form-label fs-5 text-light fw-bold">
                            Invoice was created on a computer and is Valid without the signature and seal.
                        </label>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <hr class="border border-1 border-primary" />
            </div>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="main.js"></script>
</body>

</html>